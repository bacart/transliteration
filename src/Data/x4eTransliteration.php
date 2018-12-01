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

class x4eTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'Yi ', 'Ding ', 'Kao ', 'Qi ', 'Shang ', 'Xia ', null, 'Mo ', 'Zhang ', 'San ', 'Shang ', 'Xia ', 'Ji ', 'Bu ', 'Yu ', 'Mian ',
            0x10 => 'Gai ', 'Chou ', 'Chou ', 'Zhuan ', 'Qie ', 'Pi ', 'Shi ', 'Shi ', 'Qiu ', 'Bing ', 'Ye ', 'Cong ', 'Dong ', 'Si ', 'Cheng ', 'Diu ',
            0x20 => 'Qiu ', 'Liang ', 'Diu ', 'You ', 'Liang ', 'Yan ', 'Bing ', 'Sang ', 'Gun ', 'Jiu ', 'Ge ', 'Ya ', 'Qiang ', 'Zhong ', 'Ji ', 'Jie ',
            0x30 => 'Feng ', 'Guan ', 'Chuan ', 'Chan ', 'Lin ', 'Zhuo ', 'Zhu ', 'Ha ', 'Wan ', 'Dan ', 'Wei ', 'Zhu ', 'Jing ', 'Li ', 'Ju ', 'Pie ',
            0x40 => 'Fu ', 'Yi ', 'Yi ', 'Nai ', 'Shime ', 'Jiu ', 'Jiu ', 'Zhe ', 'Yao ', 'Yi ', null, 'Zhi ', 'Wu ', 'Zha ', 'Hu ', 'Fa ',
            0x50 => 'Le ', 'Zhong ', 'Ping ', 'Pang ', 'Qiao ', 'Hu ', 'Guai ', 'Cheng ', 'Cheng ', 'Yi ', 'Yin ', null, 'Mie ', 'Jiu ', 'Qi ', 'Ye ',
            0x60 => 'Xi ', 'Xiang ', 'Gai ', 'Diu ', 'Hal ', null, 'Shu ', 'Twul ', 'Shi ', 'Ji ', 'Nang ', 'Jia ', 'Kel ', 'Shi ', null, 'Ol ',
            0x70 => 'Mai ', 'Luan ', 'Cal ', 'Ru ', 'Xue ', 'Yan ', 'Fu ', 'Sha ', 'Na ', 'Gan ', 'Sol ', 'El ', 'Cwul ', null, 'Gan ', 'Chi ',
            0x80 => 'Gui ', 'Gan ', 'Luan ', 'Lin ', 'Yi ', 'Jue ', 'Liao ', 'Ma ', 'Yu ', 'Zheng ', 'Shi ', 'Shi ', 'Er ', 'Chu ', 'Yu ', 'Yu ',
            0x90 => 'Yu ', 'Yun ', 'Hu ', 'Qi ', 'Wu ', 'Jing ', 'Si ', 'Sui ', 'Gen ', 'Gen ', 'Ya ', 'Xie ', 'Ya ', 'Qi ', 'Ya ', 'Ji ',
            0xA0 => 'Tou ', 'Wang ', 'Kang ', 'Ta ', 'Jiao ', 'Hai ', 'Yi ', 'Chan ', 'Heng ', 'Mu ', null, 'Xiang ', 'Jing ', 'Ting ', 'Liang ', 'Xiang ',
            0xB0 => 'Jing ', 'Ye ', 'Qin ', 'Bo ', 'You ', 'Xie ', 'Dan ', 'Lian ', 'Duo ', 'Wei ', 'Ren ', 'Ren ', 'Ji ', 'La ', 'Wang ', 'Yi ',
            0xC0 => 'Shi ', 'Ren ', 'Le ', 'Ding ', 'Ze ', 'Jin ', 'Pu ', 'Chou ', 'Ba ', 'Zhang ', 'Jin ', 'Jie ', 'Bing ', 'Reng ', 'Cong ', 'Fo ',
            0xD0 => 'San ', 'Lun ', 'Sya ', 'Cang ', 'Zi ', 'Shi ', 'Ta ', 'Zhang ', 'Fu ', 'Xian ', 'Xian ', 'Tuo ', 'Hong ', 'Tong ', 'Ren ', 'Qian ',
            0xE0 => 'Gan ', 'Yi ', 'Di ', 'Dai ', 'Ling ', 'Yi ', 'Chao ', 'Chang ', 'Sa ', null, 'Yi ', 'Mu ', 'Men ', 'Ren ', 'Jia ', 'Chao ',
            0xF0 => 'Yang ', 'Qian ', 'Zhong ', 'Pi ', 'Wan ', 'Wu ', 'Jian ', 'Jie ', 'Yao ', 'Feng ', 'Cang ', 'Ren ', 'Wang ', 'Fen ', 'Di ', 'Fang ',
        ];
    }
}
