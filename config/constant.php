<?php

use App\Models\Role;

return [
    'MENU_APP' => [
        'nav.menu_left.tool' => [
            'plugin' => 'tool',
            'title' => 'nav.menu_left.tool_short_link',
            'url' => 'tools/short_link',
            'icon' => 'fa fa-link',
            'role' => [Role::ROLE_ADMIN, Role::ROLE_MANAGER_MANAGER],
            'child' => [

            ]
        ],
    ]
];
