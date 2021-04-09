<?php
namespace App\Repositories\admin\qlUser;
use Illuminate\Http\Request;
interface userRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function User();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}