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

class x02Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'A', 'a', 'A', 'a', 'E', 'e', 'E', 'e', 'I', 'i', 'I', 'i', 'O', 'o', 'O', 'o',
            0x10 => 'R', 'r', 'R', 'r', 'U', 'u', 'U', 'u', 'S', 's', 'T', 't', 'Y', 'y', 'H', 'h',
            0x20 => 'N', 'd', 'OU', 'ou', 'Z', 'z', 'A', 'a', 'E', 'e', 'O', 'o', 'O', 'o', 'O', 'o',
            0x30 => 'O', 'o', 'Y', 'y', 'l', 'n', 't', 'j', 'db', 'qp', 'A', 'C', 'c', 'L', 'T', 's',
            0x40 => 'z', '?', '?', 'B', 'U', 'V', 'E', 'e', 'J', 'j', 'Q', 'q', 'R', 'r', 'Y', 'y',
            0x50 => 'a', 'a', 'a', 'b', 'o', 'c', 'd', 'd', 'e', '@', '@', 'e', 'e', 'e', 'e', 'j',
            0x60 => 'g', 'g', 'g', 'g', 'u', 'Y', 'h', 'h', 'i', 'i', 'I', 'l', 'l', 'l', 'lZ', 'W',
            0x70 => 'W', 'm', 'n', 'n', 'n', 'o', 'OE', 'O', 'F', 'R', 'R', 'R', 'R', 'r', 'r', 'R',
            0x80 => 'R', 'R', 's', 'S', 'j', 'S', 'S', 't', 't', 'U', 'U', 'v', '^', 'W', 'Y', 'Y',
            0x90 => 'z', 'z', 'Z', 'Z', '?', '?', '?', 'C', '@', 'B', 'E', 'G', 'H', 'j', 'k', 'L',
            0xA0 => 'q', '?', '?', 'dz', 'dZ', 'dz', 'ts', 'tS', 'tC', 'fN', 'ls', 'lz', 'WW', ']]', 'h', 'h',
            0xB0 => 'k', 'h', 'j', 'r', 'r', 'r', 'r', 'w', 'y', '\'', '"', '`', '\'', '`', '`', '\'',
            0xC0 => '?', '?', '<', '>', '^', 'V', '^', 'V', '\'', '-', '/', '\\', ',', '_', '\\', '/',
            0xD0 => ':', '.', '`', '\'', '^', 'V', '+', '-', 'V', '.', '@', ',', '~', '"', 'R', 'X',
            0xE0 => 'G', 'l', 's', 'x', '?', '', '', '', '', '', '', '', 'V', '=', '"', null,
            0xF0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
