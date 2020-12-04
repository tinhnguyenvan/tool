<?php

return [
    'MENU_APP' => [
        'nav.menu_left.tool' => [
            'title' => 'nav.menu_left.tool',
            'url' => '',
            'icon' => 'fa fa-code',
            'child' => [
                [
                    'title' => 'nav.menu_left.tool_qr_code',
                    'url' => 'tools/qr_code',
                    'icon' => 'fa fa-qrcode',
                ],        [
                    'title' => 'nav.menu_left.tool_short_link',
                    'url' => 'tools/short_link',
                    'icon' => 'fa fa-link',
                ],
            ]
        ],
    ]
];
