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

class xfaTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'Chey ', 'Thak ', 'Thak ', 'Thang ', 'Thayk ', 'Thong ', 'Pho ', 'Phok ', 'Hang ', 'Hang ', 'Hyen ', 'Hwak ', 'Wu ', 'Huo ', null, null,
            0x10 => 'Zhong ', null, 'Qing ', null, null, 'Xi ', 'Zhu ', 'Yi ', 'Li ', 'Shen ', 'Xiang ', 'Fu ', 'Jing ', 'Jing ', 'Yu ', null,
            0x20 => 'Hagi ', null, 'Zhu ', null, null, 'Yi ', 'Du ', null, null, null, 'Fan ', 'Si ', 'Guan ', null, null, null,
            0x30 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x40 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x50 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x60 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x70 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x80 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x90 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xA0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xB0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xC0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xD0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xE0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xF0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
