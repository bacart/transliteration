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

class x13Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'ja', 'ju', 'ji', 'jaa', 'jee', 'je', 'jo', 'jwa', 'ga', 'gu', 'gi', 'gaa', 'gee', 'ge', 'go', null,
            0x10 => 'gwa', null, 'gwi', 'gwaa', 'gwee', 'gwe', null, null, 'gga', 'ggu', 'ggi', 'ggaa', 'ggee', 'gge', 'ggo', null,
            0x20 => 'tha', 'thu', 'thi', 'thaa', 'thee', 'the', 'tho', 'thwa', 'cha', 'chu', 'chi', 'chaa', 'chee', 'che', 'cho', 'chwa',
            0x30 => 'pha', 'phu', 'phi', 'phaa', 'phee', 'phe', 'pho', 'phwa', 'tsa', 'tsu', 'tsi', 'tsaa', 'tsee', 'tse', 'tso', 'tswa',
            0x40 => 'tza', 'tzu', 'tzi', 'tzaa', 'tzee', 'tze', 'tzo', null, 'fa', 'fu', 'fi', 'faa', 'fee', 'fe', 'fo', 'fwa',
            0x50 => 'pa', 'pu', 'pi', 'paa', 'pee', 'pe', 'po', 'pwa', 'rya', 'mya', 'fya', null, null, null, null, null,
            0x60 => null, ' ', '.', ',', ';', ':', ':: ', '?', '//', '1', '2', '3', '4', '5', '6', '7',
            0x70 => '8', '9', '10+', '20+', '30+', '40+', '50+', '60+', '70+', '80+', '90+', '100+', '10,000+', null, null, null,
            0x80 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x90 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xA0 => 'a', 'e', 'i', 'o', 'u', 'v', 'ga', 'ka', 'ge', 'gi', 'go', 'gu', 'gv', 'ha', 'he', 'hi',
            0xB0 => 'ho', 'hu', 'hv', 'la', 'le', 'li', 'lo', 'lu', 'lv', 'ma', 'me', 'mi', 'mo', 'mu', 'na', 'hna',
            0xC0 => 'nah', 'ne', 'ni', 'no', 'nu', 'nv', 'qua', 'que', 'qui', 'quo', 'quu', 'quv', 'sa', 's', 'se', 'si',
            0xD0 => 'so', 'su', 'sv', 'da', 'ta', 'de', 'te', 'di', 'ti', 'do', 'du', 'dv', 'dla', 'tla', 'tle', 'tli',
            0xE0 => 'tlo', 'tlu', 'tlv', 'tsa', 'tse', 'tsi', 'tso', 'tsu', 'tsv', 'wa', 'we', 'wi', 'wo', 'wu', 'wv', 'ya',
            0xF0 => 'ye', 'yi', 'yo', 'yu', 'yv', null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
