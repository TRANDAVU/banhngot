<?php
namespace App\Repositories\admin\faq;
use Illuminate\Http\Request;
interface faqRepositoryInterface
{
    //ví dụ: lấy 10 bảng ghi rồi phân trang
    public function Faq();
    //them
    public function Chang();
    //tìm user
    public function Find($slug);
    //edit user 
    public function Edit(Request $request,$slug);
    //delete user 
    public function Delete($slug);
}