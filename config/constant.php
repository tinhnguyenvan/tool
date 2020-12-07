<?php

return [
    'MENU_APP' => [
        'nav.menu_left.tool' => [
            'plugin' => 'tool',
            'title' => 'nav.menu_left.tool',
            'url' => '',
            'icon' => 'fa fa-code',
            'child' => [
                [
                    'plugin' => 'tool',
                    'title' => 'nav.menu_left.tool_qr_code',
                    'url' => 'tools/qr_code',
                    'icon' => 'fa fa-qrcode',
                ],
                [
                    'plugin' => 'tool',
                    'title' => 'nav.menu_left.tool_short_link',
                    'url' => 'tools/short_link',
                    'icon' => 'fa fa-link',
                ],
            ]
        ],
    ]
];
