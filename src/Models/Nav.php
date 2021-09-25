<?php

namespace TinhPHP\Tool\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    public static function menuMain(): array
    {
        return [
            [
                'link' => base_url(),
                'title' => '<i class="material-icons">home</i>',
                'active' => '',
            ],
            [
                'link' => base_url('tool/facebook-icon'),
                'title' => ' 🔎 Facebook Icon',
                'active' => 'facebook_icon',
            ],
            [
                'link' => base_url('tool/facebook-text'),
                'title' => ' 🔠 Facebook Font',
                'active' => 'facebook_text',
            ],
//            [
//                'link' => base_url('tool/count-text'),
//                'title' => '🪄 Count text',
//                'active' => 'count_text',
//            ],
            [
                'link' => base_url('tool/generate-qrcode'),
                'title' => '💡 QR Code',
                'active' => 'url',
            ],
//            [
//                'link' => base_url('tool/generate-qrcode'),
//                'title' => '📎 Rút gọn link',
//                'active' => 'generate_qrcode',
//            ],
        ];
    }
}
