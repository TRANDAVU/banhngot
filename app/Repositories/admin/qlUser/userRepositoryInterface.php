<?php
namespace App\Repositories\admin\qlUser;

interface userRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function getUser();
}