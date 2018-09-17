<?php

namespace Bacart\Transliteration\Data;

class xfeTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x10 => null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
            0x20 => '', '', '', '~', null, null, null, null, null, null, null, null, null, null, null, null,
            0x30 => '..', '--', '-', '_', '_', '(', ') ', '{', '} ', '[', '] ', '[(', ')] ', '<<', '>> ', '<',
            0x40 => '> ', '[', '] ', '{', '}', null, null, null, null, '', '', '', '', '', '', '',
            0x50 => ',', ',', '.', '', ';', ':', '?', '!', '-', '(', ')', '{', '}', '{', '}', '#',
            0x60 => '&', '*', '+', '-', '<', '>', '=', '', '\\', '$', '%', '@', null, null, null, null,
            0x70 => '', '', '', null, '', null, '', '', '', '', '', '', '', '', '', '',
            0x80 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0x90 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xA0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xB0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xC0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xD0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xE0 => '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
            0xF0 => '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, '',
        ];
    }
}
