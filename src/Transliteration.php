<?php

declare(strict_types=1);

/*
 * This file is part of the Bacart package.
 *
 * (c) Alex Bacart <alex@bacart.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bacart\Transliteration;

use Bacart\Transliteration\Data\AbstractTransliteration;

/**
 * Based on Mediawiki's UtfNormal.
 */
class Transliteration implements TransliterationInterface
{
    /** @var int[] */
    protected static $tailBytes = [];

    /** @var array[] */
    protected static $map = [];

    /**
     * {@inheritdoc}
     */
    public static function transliterate(
        string $string,
        int $length = TransliterationInterface::DEFAULT_LENGTH,
        string $replace = TransliterationInterface::DEFAULT_REPLACE,
        string $unknown = TransliterationInterface::DEFAULT_UNKNOWN,
        string $srcLng = null
    ): string {
        $string = strtr(static::transliterationProcess($string, $unknown, $srcLng), [
            ' ' => '_',
            '-' => '_',
            '.' => '_',
        ]);

        // remove remaining unsafe characters
        $string = (string) preg_replace('![^0-9A-Za-z_.-]!', '', $string);

        // remove multiple consecutive non-alphabetical characters
        $string = (string) preg_replace('/(_)_+|(\.)\.+|(-)-+/', '\\1\\2\\3', $string);

        // trim and lowercase
        $string = strtolower(trim($string, ' _'));

        // cut the result
        if ($length > TransliterationInterface::DEFAULT_LENGTH) {
            $string = (string) substr($string, 0, $length) ?: $string;
        }

        return trim(
            str_replace('_', $replace, $string),
            $replace
        );
    }

    /**
     * @param string      $string
     * @param string      $unknown
     * @param string|null $srcLng
     *
     * @return string
     */
    protected static function transliterationProcess(string $string, string $unknown, ?string $srcLng): string
    {
        // ASCII is always valid NFC
        if (!preg_match('/[\x80-\xff]/', $string)) {
            return $string;
        }

        if (empty(static::$tailBytes)) {
            // each UTF-8 head byte is followed by a certain number of tail bytes
            for ($n = 0; $n < 256; ++$n) {
                if ($n < 0xc0) {
                    $remaining = 0;
                } elseif ($n < 0xe0) {
                    $remaining = 1;
                } elseif ($n < 0xf0) {
                    $remaining = 2;
                } elseif ($n < 0xf8) {
                    $remaining = 3;
                } elseif ($n < 0xfc) {
                    $remaining = 4;
                } elseif ($n < 0xfe) {
                    $remaining = 5;
                } else {
                    $remaining = 0;
                }

                static::$tailBytes[chr($n)] = $remaining;
            }
        }

        // Chop the text into pure-ASCII and non-ASCII areas; large ASCII parts can
        // be handled much more quickly. Don't chop up Unicode areas for punctuation,
        // though, that wastes energy.
        preg_match_all('/[\x00-\x7f]+|[\x80-\xff][\x00-\x40\x5b-\x5f\x7b-\xff]*/', $string, $matches);

        $result = '';

        foreach ($matches[0] ?? [] as $str) {
            if ($str[0] < "\x80") {
                // ASCII chunk: guaranteed to be valid UTF-8 and in normal form C, so
                // skip over it.
                $result .= $str;

                continue;
            }

            // We'll have to examine the chunk byte by byte to ensure that it consists
            // of valid UTF-8 sequences, and to see if any of them might not be
            // normalized.
            //
            // Since PHP is not the fastest language on earth, some of this code is a
            // little ugly with inner loop optimizations.
            $head  = '';
            $chunk = strlen($str);
            $len   = $chunk + 1;

            for ($i = -1; --$len;) {
                $c = $str[++$i];

                $remaining = static::$tailBytes[$c];

                if (0 !== $remaining) {
                    // UTF-8 head byte
                    $sequence = $head = $c;

                    do {
                        if (--$len && ($c = $str[++$i]) >= "\x80" && $c < "\xc0") {
                            // legal tail bytes are nice
                            $sequence .= $c;
                        } elseif (0 === $len) {
                            // premature end of string, drop a replacement character
                            // into output to represent the invalid UTF-8 sequence
                            $result .= $unknown;

                            break 2;
                        } else {
                            // illegal tail byte; abandon the sequence
                            $result .= $unknown;

                            // back up and reprocess this byte, it may itself be
                            // a legal ASCII or UTF-8 sequence head
                            --$i;
                            ++$len;

                            continue 2;
                        }
                    } while (--$remaining);

                    $n   = ord($head);
                    $ord = null;

                    if ($n <= 0xdf) {
                        $ord = ($n - 192) * 64 + (ord($sequence[1]) - 128);
                    } elseif ($n <= 0xef) {
                        $ord = ($n - 224) * 4096 + (ord($sequence[1]) - 128) * 64 + (ord($sequence[2]) - 128);
                    } elseif ($n <= 0xf7) {
                        $ord = ($n - 240) * 262144 + (ord($sequence[1]) - 128) * 4096 + (ord($sequence[2]) - 128) * 64 + (ord($sequence[3]) - 128);
                    } elseif ($n <= 0xfb) {
                        $ord = ($n - 248) * 16777216 + (ord($sequence[1]) - 128) * 262144 + (ord($sequence[2]) - 128) * 4096 + (ord($sequence[3]) - 128) * 64 + (ord($sequence[4]) - 128);
                    } elseif ($n <= 0xfd) {
                        $ord = ($n - 252) * 1073741824 + (ord($sequence[1]) - 128) * 16777216 + (ord($sequence[2]) - 128) * 262144 + (ord($sequence[3]) - 128) * 4096 + (ord($sequence[4]) - 128) * 64 + (ord($sequence[5]) - 128);
                    }

                    if (null !== $ord) {
                        $result .= static::transliterationReplace($ord, $unknown, $srcLng);
                    }

                    $head = '';
                } elseif ($c < "\x80") {
                    // ASCII byte
                    $result .= $c;
                    $head = '';
                } elseif ($c < "\xc0") {
                    // illegal tail bytes
                    if ('' === $head) {
                        $result .= $unknown;
                    }
                } else {
                    // miscellaneous freaks
                    $result .= $unknown;
                    $head = '';
                }
            }
        }

        return $result;
    }

    /**
     * @param int         $ord
     * @param string      $unknown
     * @param string|null $srcLng
     *
     * @return string
     */
    protected static function transliterationReplace(int $ord, string $unknown, ?string $srcLng): string
    {
        $bank = $ord >> 8;
        $ord &= 255;

        if (!isset(static::$map[$bank][$srcLng])) {
            $class = sprintf('%s\Data\%sTransliteration', __NAMESPACE__, sprintf('x%02x', $bank));

            $translations = is_subclass_of($class, AbstractTransliteration::class)
                ? call_user_func([$class, 'getTransliteration'], $srcLng)
                : [];

            static::$map[$bank][$srcLng ?: ''] = $translations;
        }

        return static::$map[$bank][$srcLng][$ord] ?? $unknown;
    }
}
