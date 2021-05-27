<?php

namespace TinhPHP\Tool\Models;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    public static function menuMain()
    {
        return [
            [
                'link' => base_url(),
                'title' => ' <i class="fa fa-home"></i> Home',
                'active' => '',
            ],
            [
                'link' => base_url('tool/facebook-icon'),
                'title' => ' 🔎 Facebook Icon',
                'active' => 'facebook_icon',
            ],
            [
                'link' => base_url('tool/facebook-text'),
                'title' => ' 🔠 Facebook Text',
                'active' => 'facebook_text',
            ],
        ];
    }
}