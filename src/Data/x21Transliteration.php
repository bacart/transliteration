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

class x21Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => '', '', 'C', '', '', '', '', '', '', '', 'g', 'H', 'H', 'H', 'h', '',
            0x10 => 'I', 'I', 'L', 'l', 'lb', 'N', 'no', '(p)', 'P', 'P', 'Q', 'R', 'R', 'R', '', '',
            0x20 => '(sm)', '(tel)', '(tm)', '', 'Z', '', null, 'mho', 'Z', '', null, null, 'B', 'C', 'e', 'e',
            0x30 => '', 'F', null, 'M', 'o', '', '', '', '', 'i', 'Q', '(fax)', 'pi', '', '', 'Pi',
            0x40 => '', 'G', 'L', 'L', 'Y', 'D', 'd', 'e', 'i', 'j', '', '', 'per', '', null, null,
            0x50 => null, null, null, ' 1/3 ', ' 2/3 ', ' 1/5 ', ' 2/5 ', ' 3/5 ', ' 4/5 ', ' 1/6 ', ' 5/6 ', ' 1/8 ', ' 3/8 ', ' 5/8 ', ' 7/8 ', ' 1/',
            0x60 => 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'L', 'C', 'D', 'M',
            0x70 => 'i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'viii', 'ix', 'x', 'xi', 'xii', 'l', 'c', 'd', 'm',
            0x80 => '(D', 'D)', '((|))', ')', null, null, null, null, null, null, null, null, null, null, null, null,
            0x90 => '-', '|', '-', '|', '-', '|', '\\', '/', '\\', '/', '-', '-', '~', '~', '-', '|',
            0xA0 => '-', '|', '-', '-', '-', '|', '-', '|', '|', '-', '-', '-', '-', '-', '-', '|',
            0xB0 => '|', '|', '|', '|', '|', '|', '^', 'V', '\\', '=', 'V', '^', '-', '-', '|', '|',
            0xC0 => '-', '-', '|', '|', '=', '|', '=', '=', '|', '=', '|', '=', '=', '=', '=', '=',
            0xD0 => '=', '|', '=', '|', '=', '|', '\\', '/', '\\', '/', '=', '=', '~', '~', '|', '|',
            0xE0 => '-', '|', '-', '|', '-', '-', '-', '|', '-', '|', '|', '|', '|', '|', '|', '|',
            0xF0 => '-', '\\', '\\', '|', null, null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
