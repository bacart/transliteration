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

class x27Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x10 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x20 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x30 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x40 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x50 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null,
            0x60 => null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x70 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x80 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x90 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xA0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xB0 => null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', null,
            0xC0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xD0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xE0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xF0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
