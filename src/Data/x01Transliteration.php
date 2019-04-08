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

namespace Bacart\Transliteration\Data;

class x01Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd',
            0x10 => 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g',
            0x20 => 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i',
            0x30 => 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L',
            0x40 => 'l', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '\'n', 'NG', 'ng', 'O', 'o', 'O', 'o',
            0x50 => 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's',
            0x60 => 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u',
            0x70 => 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's',
            0x80 => 'b', 'B', 'B', 'b', '6', '6', 'O', 'C', 'c', 'D', 'D', 'D', 'd', 'd', '3', '@',
            0x90 => 'E', 'F', 'f', 'G', 'G', 'hv', 'I', 'I', 'K', 'k', 'l', 'l', 'W', 'N', 'n', 'O',
            0xA0 => 'O', 'o', 'OI', 'oi', 'P', 'p', 'YR', '2', '2', 'SH', 'sh', 't', 'T', 't', 'T', 'U',
            0xB0 => 'u', 'Y', 'V', 'Y', 'y', 'Z', 'z', 'ZH', 'ZH', 'zh', 'zh', '2', '5', '5', 'ts', 'w',
            0xC0 => '|', '||', '|=', '!', 'DZ', 'Dz', 'dz', 'LJ', 'Lj', 'lj', 'NJ', 'Nj', 'nj', 'A', 'a', 'I',
            0xD0 => 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '@', 'A', 'a',
            0xE0 => 'A', 'a', 'AE', 'ae', 'G', 'g', 'G', 'g', 'K', 'k', 'O', 'o', 'O', 'o', 'ZH', 'zh',
            0xF0 => 'j', 'DZ', 'D', 'dz', 'G', 'g', 'HV', 'W', 'N', 'n', 'A', 'a', 'AE', 'ae', 'O', 'o',
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected static function getVariants(): array
    {
        return [
            // overrides for Esperanto input
            'eo' => [
                0x08 => 'Cx',
                0x09 => 'cx',
                0x1C => 'Gx',
                0x1D => 'gx',
                0x24 => 'Hx',
                0x25 => 'hx',
                0x34 => 'Jx',
                0x35 => 'jx',
                0x5C => 'Sx',
                0x5D => 'sx',
                0x6C => 'Ux',
                0x6D => 'ux',
            ],
        ];
    }
}
