<?php
namespace App\Repositories\admin\permision;
use Illuminate\Http\Request;
interface permisionRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function Permision();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}