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
            'route' => 'admin.userController.index',
            'items' => [
                [
                    'name' => 'Thông tin người dùng',
                    'ico' => 'fa-tachometer-alt',
                    'route' => 'admin.userController.index',
                ],
                [
                    'name' => 'Quyền hạn người dùng',
                    'ico' => 'fa-tachometer-alt',
                    'route' => 'admin.levelController.index'
                ],
                [
                    'name' => 'Thông tin chức vụ',
                    'ico' => 'fa-tachometer-alt',
                    'route' => 'admin.permisionController.index'
                ]
            ]
        ],[
            'name' => 'Quản lý sản phẩm',
            'ico' => 'fa-list',
            'route' => '',
            'items' => [
                [
                    'name' => 'Thông tin danh muc',
                    'ico' => 'fa-clipboard-list-check',
                    'route' => 'admin.adminChiTietDanhMucController.index',
                ],
                [
                    'name' => 'chỉ tiết danh mục',
                    'ico' => 'fa-list',
                    'route' => 'admin.adminDanhMucController.index'
                ],
                [
                    'name' => 'thông tin sản phẩm',
                    'ico' => 'fa-boxes',
                    'route' => 'admin.adminProductcontroller.index'
                ],
            ]
        ],[
            'name' => 'Quản lý khách hàng',
            'ico' => 'fas fa-users',
            'route' => '',
            'items' => [
                [
                    'name' => 'Thông tin khách hàng',
                    'ico' => 'fa-clipboard-list-check',
                    'route' => '',
                ],
                [
                    'name' => 'Thông tin đơn hàng',
                    'ico' => 'fa-list',
                    'route' => ''
                ],
                [
                    'name' => 'chi tiết đơn hàng',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],[
                    'name' => 'Mã giảm giá',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],[
                    'name' => 'Mã giảm giá đã dùng',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ]
            ]
        ],[
            'name' => 'Quản lý nội dung',
            'ico' => 'fas fa-compass',
            'route' => '',
            'items' => [
                [
                    'name' => 'Thông tin bài viết',
                    'ico' => 'fa-clipboard-list-check',
                    'route' => '',
                ],
                [
                    'name' => 'FAQ',
                    'ico' => 'fa-list',
                    'route' => ''
                ],
                [
                    'name' => 'Slide',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],
                [
                    'name' => 'Thợ làm bánh',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],
                [
                    'name' => 'Comming Soon',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],
                [
                    'name' => 'Thông tin quán',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ]
            ]
        ],[
            'name' => 'Nội dung phụ',
            'ico' => 'fas fa-menorah',
            'route' => '',
            'items' => [
                [
                    'name' => 'Thời gian làm việc',
                    'ico' => 'fa-clipboard-list-check',
                    'route' => '',
                ],
                [
                    'name' => 'Tình trạng đơn hàng',
                    'ico' => 'fa-list',
                    'route' => ''
                ],
                [
                    'name' => 'Nội dung trang web',
                    'ico' => 'fa-boxes',
                    'route' => ''
                ],
            ]
        ]
    ];
?>