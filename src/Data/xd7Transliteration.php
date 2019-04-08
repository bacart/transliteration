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

class xd7Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'hwen', 'hwenj', 'hwenh', 'hwed', 'hwel', 'hwelg', 'hwelm', 'hwelb', 'hwels', 'hwelt', 'hwelp', 'hwelh', 'hwem', 'hweb', 'hwebs', 'hwes',
            0x10 => 'hwess', 'hweng', 'hwej', 'hwec', 'hwek', 'hwet', 'hwep', 'hweh', 'hwi', 'hwig', 'hwigg', 'hwigs', 'hwin', 'hwinj', 'hwinh', 'hwid',
            0x20 => 'hwil', 'hwilg', 'hwilm', 'hwilb', 'hwils', 'hwilt', 'hwilp', 'hwilh', 'hwim', 'hwib', 'hwibs', 'hwis', 'hwiss', 'hwing', 'hwij', 'hwic',
            0x30 => 'hwik', 'hwit', 'hwip', 'hwih', 'hyu', 'hyug', 'hyugg', 'hyugs', 'hyun', 'hyunj', 'hyunh', 'hyud', 'hyul', 'hyulg', 'hyulm', 'hyulb',
            0x40 => 'hyuls', 'hyult', 'hyulp', 'hyulh', 'hyum', 'hyub', 'hyubs', 'hyus', 'hyuss', 'hyung', 'hyuj', 'hyuc', 'hyuk', 'hyut', 'hyup', 'hyuh',
            0x50 => 'heu', 'heug', 'heugg', 'heugs', 'heun', 'heunj', 'heunh', 'heud', 'heul', 'heulg', 'heulm', 'heulb', 'heuls', 'heult', 'heulp', 'heulh',
            0x60 => 'heum', 'heub', 'heubs', 'heus', 'heuss', 'heung', 'heuj', 'heuc', 'heuk', 'heut', 'heup', 'heuh', 'hyi', 'hyig', 'hyigg', 'hyigs',
            0x70 => 'hyin', 'hyinj', 'hyinh', 'hyid', 'hyil', 'hyilg', 'hyilm', 'hyilb', 'hyils', 'hyilt', 'hyilp', 'hyilh', 'hyim', 'hyib', 'hyibs', 'hyis',
            0x80 => 'hyiss', 'hying', 'hyij', 'hyic', 'hyik', 'hyit', 'hyip', 'hyih', 'hi', 'hig', 'higg', 'higs', 'hin', 'hinj', 'hinh', 'hid',
            0x90 => 'hil', 'hilg', 'hilm', 'hilb', 'hils', 'hilt', 'hilp', 'hilh', 'him', 'hib', 'hibs', 'his', 'hiss', 'hing', 'hij', 'hic',
            0xA0 => 'hik', 'hit', 'hip', 'hih', null, null, null, null, null, null, null, null, null, null, null, null,
            0xB0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xC0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xD0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xE0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0xF0 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        ];
    }
}
