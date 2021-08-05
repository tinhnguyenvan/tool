<?php

use App\Models\Role;

return [
    'MENU_APP' => [
        'nav.menu_left.tool' => [
            'plugin' => 'tool',
            'title' => 'nav.menu_left.tool',
            'url' => '',
            'icon' => 'fa fa-code',
            'role' => [Role::ROLE_ADMIN, Role::ROLE_MANAGER_MANAGER],
            'child' => [
                [
                    'plugin' => 'tool',
                    'title' => 'nav.menu_left.tool_qr_code',
                    'url' => 'tools/qr_code',
                    'icon' => 'fa fa-qrcode',
                    'role' => [Role::ROLE_ADMIN, Role::ROLE_MANAGER_MANAGER],
                ],
                [
                    'plugin' => 'tool',
                    'title' => 'nav.menu_left.tool_short_link',
                    'url' => 'tools/short_link',
                    'icon' => 'fa fa-link',
                    'role' => [Role::ROLE_ADMIN, Role::ROLE_MANAGER_MANAGER],
                ],
                [
                    'plugin' => 'tool',
                    'title' => 'Wordpress Tool',
                    'url' => 'tools/wordpress-tool',
                    'icon' => 'fa fa-wordpress',
                    'role' => [Role::ROLE_ADMIN, Role::ROLE_MANAGER_MANAGER],
                ],
            ]
        ],
    ]
];
