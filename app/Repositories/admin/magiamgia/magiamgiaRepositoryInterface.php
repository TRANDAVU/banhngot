<?php
namespace App\Repositories\admin\magiamgia;
use Illuminate\Http\Request;
interface magiamgiaRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function Magiamgia();
    //them
    public function Chang();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}