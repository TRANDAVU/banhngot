<?php
namespace App\Repositories\admin\tholambanh;
use Illuminate\Http\Request;
interface tholambanhRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function Tholambanh();
    //them
    public function Chang();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}