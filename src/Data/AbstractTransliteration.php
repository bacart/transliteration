<?php

/*
 * This file is part of the Bacart package.
 *
 * (c) Alex Bacart <alex@bacart.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bacart\Transliteration\Data;

abstract class AbstractTransliteration
{
    /**
     * @param string|null $srcLng
     *
     * @return string[]
     */
    public static function getTransliteration(string $srcLng = null): array
    {
        $base = static::getBase();
        $variants = static::getVariants();

        if (null !== $srcLng && isset($variants[$srcLng])) {
            $base = $variants[$srcLng] + $base;
        }

        return $base;
    }

    /**
     * @return string[]
     */
    protected static function getBase(): array
    {
        return [];
    }

    /**
     * @return array[]
     */
    protected static function getVariants(): array
    {
        return [];
    }
}
