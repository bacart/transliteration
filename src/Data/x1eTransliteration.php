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

class x1eTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'A', 'a', 'B', 'b', 'B', 'b', 'B', 'b', 'C', 'c', 'D', 'd', 'D', 'd', 'D', 'd',
            0x10 => 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'F', 'f',
            0x20 => 'G', 'g', 'H', 'h', 'H', 'h', 'H', 'h', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i',
            0x30 => 'K', 'k', 'K', 'k', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'M', 'm',
            0x40 => 'M', 'm', 'M', 'm', 'N', 'n', 'N', 'n', 'N', 'n', 'N', 'n', 'O', 'o', 'O', 'o',
            0x50 => 'O', 'o', 'O', 'o', 'P', 'p', 'P', 'p', 'R', 'r', 'R', 'r', 'R', 'r', 'R', 'r',
            0x60 => 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't',
            0x70 => 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'V', 'v', 'V', 'v',
            0x80 => 'W', 'w', 'W', 'w', 'W', 'w', 'W', 'w', 'W', 'w', 'X', 'x', 'X', 'x', 'Y', 'y',
            0x90 => 'Z', 'z', 'Z', 'z', 'Z', 'z', 'h', 't', 'w', 'y', 'a', 'S', null, null, null, null,
            0xA0 => 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a',
            0xB0 => 'A', 'a', 'A', 'a', 'A', 'a', 'A', 'a', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e',
            0xC0 => 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'I', 'i', 'I', 'i', 'O', 'o', 'O', 'o',
            0xD0 => 'O', 'o', 'O', 'o', 'O', 'o', 'O', 'o', 'O', 'o', 'O', 'o', 'O', 'o', 'O', 'o',
            0xE0 => 'O', 'o', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u',
            0xF0 => 'U', 'u', 'Y', 'y', 'Y', 'y', 'Y', 'y', 'Y', 'y', null, null, null, null, null, null,
        ];
    }
}
