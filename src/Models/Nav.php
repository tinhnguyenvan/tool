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
                'title' => '<i class="material-icons">home</i> Home',
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
                'child' => [
                    [
                        'link' => base_url('tool/facebook-text'),
                        'title' => '80 Fonts ĐẸℙ, ĐỘℂ, 𝕃Ạ',
                        'active' => 'sub_facebook_text',
                    ],
                    [
                        'link' => base_url('tool/facebook-text/strike'),
                        'title' => 'Font chữ gạch ngang',
                        'active' => 'sub_facebook_strike',
                    ],
                ]
            ],
//            [
//                'link' => base_url('tool/count-text'),
//                'title' => '🪄 Count text',
//                'active' => 'count_text',
//            ],
            [
                'link' => base_url('tool/generate-qrcode'),
                'title' => '💡 QR Code',
                'active' => 'generate_qrcode',
                'child' => [
                    [
                        'link' => base_url('tool/generate-qrcode'),
                        'title' => 'Website URL',
                        'active' => 'url',
                    ],
                    [
                        'link' => base_url('tool/generate-qrcode/email'),
                        'title' => 'Email',
                        'active' => 'email',
                    ],
                    [
                        'link' => base_url('tool/generate-qrcode/sms'),
                        'title' => 'SMS',
                        'active' => 'sms',
                    ],
                ]
            ],
//            [
//                'link' => base_url('tool/generate-qrcode'),
//                'title' => '📎 Rút gọn link',
//                'active' => 'generate_qrcode',
//            ],
            [
                'link' => 'https://khuyenmai.tweb.com.vn?utm_source=tool.tweb.com.vn',
                'title' => '🔖 Săn Coupon',
                'active' => '',
            ],
            [
                'link' => 'https://tweb.com.vn/sl/6539fd6',
                'title' => 'Thiết Kế Landing Page ',
                'active' => '',
            ],

//            [
//                'link' => base_url('tool/facebook-avatar'),
//                'title' => '🪄 Tạo ảnh facebook tích xanh',
//                'active' => 'facebook_avatar',
//            ],
        ];
    }
}
