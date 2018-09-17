<?php

namespace Bacart\Transliteration;

/**
 * Based on Mediawiki's UtfNormal.
 */
class TransliterationUtils
{
    protected const UNKNOWN = '?';

    /** @var int[] */
    protected static $tailBytes = [];

    /** @var array[] */
    protected static $map = [];

    /**
     * @param string      $string
     * @param int         $length
     * @param string|null $srcLng
     *
     * @return string
     */
    public static function transliterate(
        string $string,
        int $length = 20,
        string $srcLng = null
    ): string {
        $string = strtr(static::transliterationProcess($string, $srcLng), [
            ' ' => '_',
            '-' => '_',
            '.' => '_',
        ]);

        // remove remaining unsafe characters
        $string = preg_replace('![^0-9A-Za-z_.-]!', '', $string);

        // remove multiple consecutive non-alphabetical characters
        $string = preg_replace('/(_)_+|(\.)\.+|(-)-+/', '\\1\\2\\3', $string);

        // trim and lowercase
        $string = strtolower(trim($string, ' _'));

        // cut the result
        if ($length > 0) {
            $string = (string) substr($string, 0, $length) ?: $string;
        }

        return str_replace('_', '-', $string);
    }

    /**
     * @param string      $string
     * @param string|null $srcLng
     *
     * @return string
     */
    protected static function transliterationProcess(
        string $string,
        string $srcLng = null
    ): string {
        // ASCII is always valid NFC
        if (!preg_match('/[\x80-\xff]/', $string)) {
            return $string;
        }

        if (empty(static::$tailBytes)) {
            // each UTF-8 head byte is followed by a certain number of tail bytes
            for ($n = 0; $n < 256; ++$n) {
                $remaining = 0;

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
                }

                static::$tailBytes[\chr($n)] = $remaining;
            }
        }

        // Chop the text into pure-ASCII and non-ASCII areas; large ASCII parts can
        // be handled much more quickly. Don't chop up Unicode areas for punctuation,
        // though, that wastes energy.
        preg_match_all('/[\x00-\x7f]+|[\x80-\xff][\x00-\x40\x5b-\x5f\x7b-\xff]*/', $string, $matches);

        $result = '';

        foreach ($matches[0] ?? [] as $str) {
            if ($str[0] < '\x80') {
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
            $head = '';
            $chunk = \strlen($str);
            $len = $chunk + 1;

            for ($i = -1; --$len;) {
                $c = $str[++$i];

                if ($remaining = static::$tailBytes[$c]) {
                    // UTF-8 head byte
                    $sequence = $head = $c;

                    do {
                        if (--$len && ($c = $str[++$i]) >= '\x80' && $c < '\xc0') {
                            // legal tail bytes are nice
                            $sequence .= $c;
                        } elseif (0 === $len) {
                            // premature end of string, drop a replacement character
                            // into output to represent the invalid UTF-8 sequence
                            $result .= static::UNKNOWN;

                            break 2;
                        } else {
                            // illegal tail byte; abandon the sequence
                            $result .= static::UNKNOWN;

                            // back up and reprocess this byte, it may itself be
                            // a legal ASCII or UTF-8 sequence head
                            --$i;
                            ++$len;

                            continue 2;
                        }
                    } while (--$remaining);

                    $n = \ord($head);
                    $ord = null;

                    if ($n <= 0xdf) {
                        $ord = ($n - 192) * 64 + (\ord($sequence[1]) - 128);
                    } elseif ($n <= 0xef) {
                        $ord = ($n - 224) * 4096 + (\ord($sequence[1]) - 128) * 64 + (\ord($sequence[2]) - 128);
                    } elseif ($n <= 0xf7) {
                        $ord = ($n - 240) * 262144 + (\ord($sequence[1]) - 128) * 4096 + (\ord($sequence[2]) - 128) * 64 + (\ord($sequence[3]) - 128);
                    } elseif ($n <= 0xfb) {
                        $ord = ($n - 248) * 16777216 + (\ord($sequence[1]) - 128) * 262144 + (\ord($sequence[2]) - 128) * 4096 + (\ord($sequence[3]) - 128) * 64 + (\ord($sequence[4]) - 128);
                    } elseif ($n <= 0xfd) {
                        $ord = ($n - 252) * 1073741824 + (\ord($sequence[1]) - 128) * 16777216 + (\ord($sequence[2]) - 128) * 262144 + (\ord($sequence[3]) - 128) * 4096 + (\ord($sequence[4]) - 128) * 64 + (\ord($sequence[5]) - 128);
                    }

                    if (null !== $ord) {
                        $result .= static::transliterationReplace($ord, $srcLng);
                    }

                    $head = '';
                } elseif ($c < '\x80') {
                    // ASCII byte
                    $result .= $c;
                    $head = '';
                } elseif ($c < '\xc0') {
                    // illegal tail bytes
                    if ('' === $head) {
                        $result .= static::UNKNOWN;
                    }
                } else {
                    // miscellaneous freaks
                    $result .= static::UNKNOWN;
                    $head = '';
                }
            }
        }

        return $result;
    }

    /**
     * @param string      $ord
     * @param string|null $srcLng
     *
     * @return string
     */
    protected static function transliterationReplace(
        string $ord,
        string $srcLng = null
    ): string {
        $bank = $ord >> 8;
        $ord &= 255;

        if (!isset(static::$map[$bank][$srcLng])) {
            $class = sprintf(
                '%s\TransliterationData\%sTransliteration',
                __NAMESPACE__, sprintf('x%02x', $bank)
            );

            static::$map[$bank][$srcLng] =
                method_exists($class, 'getTransliteration')
                ? $class::getTransliteration($srcLng)
                : [];
        }

        return static::$map[$bank][$srcLng][$ord] ?? static::UNKNOWN;
    }
}
