<?php
namespace App\Repositories\admin\CTdonhang;
use Illuminate\Http\Request;
interface CTdonhangRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function CTdonhang();
    //them
    public function Chang();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}