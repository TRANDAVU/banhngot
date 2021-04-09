<?php
namespace App\Repositories\admin\level;
use Illuminate\Http\Request;
interface levelRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function Level();
    //timkiem
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}