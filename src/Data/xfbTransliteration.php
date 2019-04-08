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

class xfbTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'ff', 'fi', 'fl', 'ffi', 'ffl', 'st', 'st', null, null, null, null, null, null, null, null, null,
            0x10 => null, null, null, 'mn', 'me', 'mi', 'vn', 'mkh', null, null, null, null, null, 'yi', '', 'ay',
            0x20 => '`', '', 'd', 'h', 'k', 'l', 'm', 'm', 't', '+', 'sh', 's', 'sh', 's', 'a', 'a',
            0x30 => '', 'b', 'g', 'd', 'h', 'v', 'z', null, 't', 'y', 'k', 'k', 'l', null, 'l', null,
            0x40 => 'n', 'n', null, 'p', 'p', null, 'ts', 'ts', 'r', 'sh', 't', 'vo', 'b', 'k', 'p', 'l',
            0x50 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x60 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x70 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x80 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x90 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xA0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xB0 => '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xC0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xD0 => null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xE0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xF0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
        ];
    }
}
