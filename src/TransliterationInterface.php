<?php

/*
 * This file is part of the Bacart package.
 *
 * (c) Alex Bacart <alex@bacart.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bacart\Transliteration;

interface TransliterationInterface
{
    public const DEFAULT_LENGTH = 30;
    public const DEFAULT_REPLACE = '-';
    public const UNKNOWN = '?';

    /**
     * @param string      $string
     * @param int         $length
     * @param string      $replace
     * @param string|null $srcLng
     *
     * @return string
     */
    public static function transliterate(
        string $string,
        int $length = self::DEFAULT_LENGTH,
        string $replace = self::DEFAULT_REPLACE,
        string $srcLng = null
    ): string;
}