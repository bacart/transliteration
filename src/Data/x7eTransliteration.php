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

class x7eTransliteration extends AbstractTransliteration
{
    /**
     * {@inheritdoc}
     */
    protected static function getBase(): array
    {
        return [
            0x00 => 'Xia ', 'Yuan ', 'Zong ', 'Xu ', 'Nawa ', 'Odoshi ', 'Geng ', 'Sen ', 'Ying ', 'Jin ', 'Yi ', 'Zhui ', 'Ni ', 'Bang ', 'Gu ', 'Pan ',
            0x10 => 'Zhou ', 'Jian ', 'Cuo ', 'Quan ', 'Shuang ', 'Yun ', 'Xia ', 'Shuai ', 'Xi ', 'Rong ', 'Tao ', 'Fu ', 'Yun ', 'Zhen ', 'Gao ', 'Ru ',
            0x20 => 'Hu ', 'Zai ', 'Teng ', 'Xian ', 'Su ', 'Zhen ', 'Zong ', 'Tao ', 'Horo ', 'Cai ', 'Bi ', 'Feng ', 'Cu ', 'Li ', 'Suo ', 'Yin ',
            0x30 => 'Xi ', 'Zong ', 'Lei ', 'Zhuan ', 'Qian ', 'Man ', 'Zhi ', 'Lu ', 'Mo ', 'Piao ', 'Lian ', 'Mi ', 'Xuan ', 'Zong ', 'Ji ', 'Shan ',
            0x40 => 'Sui ', 'Fan ', 'Shuai ', 'Beng ', 'Yi ', 'Sao ', 'Mou ', 'Zhou ', 'Qiang ', 'Hun ', 'Sem ', 'Xi ', 'Jung ', 'Xiu ', 'Ran ', 'Xuan ',
            0x50 => 'Hui ', 'Qiao ', 'Zeng ', 'Zuo ', 'Zhi ', 'Shan ', 'San ', 'Lin ', 'Yu ', 'Fan ', 'Liao ', 'Chuo ', 'Zun ', 'Jian ', 'Rao ', 'Chan ',
            0x60 => 'Rui ', 'Xiu ', 'Hui ', 'Hua ', 'Zuan ', 'Xi ', 'Qiang ', 'Un ', 'Da ', 'Sheng ', 'Hui ', 'Xi ', 'Se ', 'Jian ', 'Jiang ', 'Huan ',
            0x70 => 'Zao ', 'Cong ', 'Jie ', 'Jiao ', 'Bo ', 'Chan ', 'Yi ', 'Nao ', 'Sui ', 'Yi ', 'Shai ', 'Xu ', 'Ji ', 'Bin ', 'Qian ', 'Lan ',
            0x80 => 'Pu ', 'Xun ', 'Zuan ', 'Qi ', 'Peng ', 'Li ', 'Mo ', 'Lei ', 'Xie ', 'Zuan ', 'Kuang ', 'You ', 'Xu ', 'Lei ', 'Xian ', 'Chan ',
            0x90 => 'Kou ', 'Lu ', 'Chan ', 'Ying ', 'Cai ', 'Xiang ', 'Xian ', 'Zui ', 'Zuan ', 'Luo ', 'Xi ', 'Dao ', 'Lan ', 'Lei ', 'Lian ', 'Si ',
            0xA0 => 'Jiu ', 'Yu ', 'Hong ', 'Zhou ', 'Xian ', 'He ', 'Yue ', 'Ji ', 'Wan ', 'Kuang ', 'Ji ', 'Ren ', 'Wei ', 'Yun ', 'Hong ', 'Chun ',
            0xB0 => 'Pi ', 'Sha ', 'Gang ', 'Na ', 'Ren ', 'Zong ', 'Lun ', 'Fen ', 'Zhi ', 'Wen ', 'Fang ', 'Zhu ', 'Yin ', 'Niu ', 'Shu ', 'Xian ',
            0xC0 => 'Gan ', 'Xie ', 'Fu ', 'Lian ', 'Zu ', 'Shen ', 'Xi ', 'Zhi ', 'Zhong ', 'Zhou ', 'Ban ', 'Fu ', 'Zhuo ', 'Shao ', 'Yi ', 'Jing ',
            0xD0 => 'Dai ', 'Bang ', 'Rong ', 'Jie ', 'Ku ', 'Rao ', 'Die ', 'Heng ', 'Hui ', 'Gei ', 'Xuan ', 'Jiang ', 'Luo ', 'Jue ', 'Jiao ', 'Tong ',
            0xE0 => 'Geng ', 'Xiao ', 'Juan ', 'Xiu ', 'Xi ', 'Sui ', 'Tao ', 'Ji ', 'Ti ', 'Ji ', 'Xu ', 'Ling ', null, 'Xu ', 'Qi ', 'Fei ',
            0xF0 => 'Chuo ', 'Zhang ', 'Gun ', 'Sheng ', 'Wei ', 'Mian ', 'Shou ', 'Beng ', 'Chou ', 'Tao ', 'Liu ', 'Quan ', 'Zong ', 'Zhan ', 'Wan ', 'Lu ',
        ];
    }
}
