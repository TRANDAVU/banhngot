<?php
    return[
        [
            'name' => 'Dashboard',
            'ico' => 'fa-tachometer-alt',
            'route' => 'admin.adminController.index'
        ],
        [
            'name' => 'Quản lý người dùng',
            'ico' => 'fa-user-circle',
            'route' => 'admin.adminController.index',
            'items' => [
                [
                    'name' => 'Thông tin người dùng',
                    'ico' => 'fa-tachometer-alt',
                    'route' => 'admin.userController.index',
                ],
                [
                    'name' => 'Thay đổi thông tin',
                    'ico' => 'fa-tachometer-alt',
                    'route' => 'admin.userController.chang'
                ]
            ]
        ]
    ];
?>