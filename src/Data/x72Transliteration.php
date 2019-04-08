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

class x72Transliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'He ', 'Lan ', 'Biao ', 'Rong ', 'Li ', 'Mo ', 'Bao ', 'Ruo ', 'Lu ', 'La ', 'Ao ', 'Xun ', 'Kuang ', 'Shuo ', null, 'Li ',
            0x10 => 'Lu ', 'Jue ', 'Liao ', 'Yan ', 'Xi ', 'Xie ', 'Long ', 'Ye ', null, 'Rang ', 'Yue ', 'Lan ', 'Cong ', 'Jue ', 'Tong ', 'Guan ',
            0x20 => null, 'Che ', 'Mi ', 'Tang ', 'Lan ', 'Zhu ', null, 'Ling ', 'Cuan ', 'Yu ', 'Zhua ', 'Tsumekanmuri ', 'Pa ', 'Zheng ', 'Pao ', 'Cheng ',
            0x30 => 'Yuan ', 'Ai ', 'Wei ', null, 'Jue ', 'Jue ', 'Fu ', 'Ye ', 'Ba ', 'Die ', 'Ye ', 'Yao ', 'Zu ', 'Shuang ', 'Er ', 'Qiang ',
            0x40 => 'Chuang ', 'Ge ', 'Zang ', 'Die ', 'Qiang ', 'Yong ', 'Qiang ', 'Pian ', 'Ban ', 'Pan ', 'Shao ', 'Jian ', 'Pai ', 'Du ', 'Chuang ', 'Tou ',
            0x50 => 'Zha ', 'Bian ', 'Die ', 'Bang ', 'Bo ', 'Chuang ', 'You ', null, 'Du ', 'Ya ', 'Cheng ', 'Niu ', 'Ushihen ', 'Pin ', 'Jiu ', 'Mou ',
            0x60 => 'Tuo ', 'Mu ', 'Lao ', 'Ren ', 'Mang ', 'Fang ', 'Mao ', 'Mu ', 'Gang ', 'Wu ', 'Yan ', 'Ge ', 'Bei ', 'Si ', 'Jian ', 'Gu ',
            0x70 => 'You ', 'Ge ', 'Sheng ', 'Mu ', 'Di ', 'Qian ', 'Quan ', 'Quan ', 'Zi ', 'Te ', 'Xi ', 'Mang ', 'Keng ', 'Qian ', 'Wu ', 'Gu ',
            0x80 => 'Xi ', 'Li ', 'Li ', 'Pou ', 'Ji ', 'Gang ', 'Zhi ', 'Ben ', 'Quan ', 'Run ', 'Du ', 'Ju ', 'Jia ', 'Jian ', 'Feng ', 'Pian ',
            0x90 => 'Ke ', 'Ju ', 'Kao ', 'Chu ', 'Xi ', 'Bei ', 'Luo ', 'Jie ', 'Ma ', 'San ', 'Wei ', 'Li ', 'Dun ', 'Tong ', null, 'Jiang ',
            0xA0 => 'Ikenie ', 'Li ', 'Du ', 'Lie ', 'Pi ', 'Piao ', 'Bao ', 'Xi ', 'Chou ', 'Wei ', 'Kui ', 'Chou ', 'Quan ', 'Fan ', 'Ba ', 'Fan ',
            0xB0 => 'Qiu ', 'Ji ', 'Cai ', 'Chuo ', 'An ', 'Jie ', 'Zhuang ', 'Guang ', 'Ma ', 'You ', 'Kang ', 'Bo ', 'Hou ', 'Ya ', 'Yin ', 'Huan ',
            0xC0 => 'Zhuang ', 'Yun ', 'Kuang ', 'Niu ', 'Di ', 'Qing ', 'Zhong ', 'Mu ', 'Bei ', 'Pi ', 'Ju ', 'Ni ', 'Sheng ', 'Pao ', 'Xia ', 'Tuo ',
            0xD0 => 'Hu ', 'Ling ', 'Fei ', 'Pi ', 'Ni ', 'Ao ', 'You ', 'Gou ', 'Yue ', 'Ju ', 'Dan ', 'Po ', 'Gu ', 'Xian ', 'Ning ', 'Huan ',
            0xE0 => 'Hen ', 'Jiao ', 'He ', 'Zhao ', 'Ji ', 'Xun ', 'Shan ', 'Ta ', 'Rong ', 'Shou ', 'Tong ', 'Lao ', 'Du ', 'Xia ', 'Shi ', 'Hua ',
            0xF0 => 'Zheng ', 'Yu ', 'Sun ', 'Yu ', 'Bi ', 'Mang ', 'Xi ', 'Juan ', 'Li ', 'Xia ', 'Yin ', 'Suan ', 'Lang ', 'Bei ', 'Zhi ', 'Yan ',
        ];
    }
}
