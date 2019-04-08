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

class x1fTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A',
            0x10 => 'e', 'e', 'e', 'e', 'e', 'e', null, null, 'E', 'E', 'E', 'E', 'E', 'E', null, null,
            0x20 => 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E',
            0x30 => 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'I', 'I', 'I', 'I', 'I', 'I', 'I', 'I',
            0x40 => 'o', 'o', 'o', 'o', 'o', 'o', null, null, 'O', 'O', 'O', 'O', 'O', 'O', null, null,
            0x50 => 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', null, 'U', null, 'U', null, 'U', null, 'U',
            0x60 => 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O',
            0x70 => 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'o', 'o', null, null,
            0x80 => 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A',
            0x90 => 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E',
            0xA0 => 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O',
            0xB0 => 'a', 'a', 'a', 'a', 'a', null, 'a', 'a', 'A', 'A', 'A', 'A', 'A', '\'', 'i', '\'',
            0xC0 => '~', '"~', 'e', 'e', 'e', null, 'e', 'e', 'E', 'E', 'E', 'E', 'E', '\'`', '\'\'', '\'~',
            0xD0 => 'i', 'i', 'i', 'i', null, null, 'i', 'i', 'I', 'I', 'I', 'I', null, '`\'', '`\'', '`~',
            0xE0 => 'u', 'u', 'u', 'u', 'R', 'R', 'u', 'u', 'U', 'U', 'U', 'U', 'R', '"`', '"\'', '`',
            0xF0 => null, null, 'o', 'o', 'o', null, 'o', 'o', 'O', 'O', 'O', 'O', 'O', '\'', '`', null,
        ];
    }
}
