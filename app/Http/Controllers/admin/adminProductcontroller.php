<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\admin\product\productRepositoryInterface;
use RealRashid\SweetAlert\Facades\Alert;

class adminProductcontroller extends Controller
{
    protected $productRepo;

    public function __construct(productRepositoryInterface $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getindex()
    {
        $colums = ['Tên sản phẩm','Hạn dùng', 'Ưu đãi','Giá bán','Trạng thái','DV bán','Chi tiết danh mục','Hình ảnh'];
        $product=$this->productRepo->Product();
        return view('admin.product.index',compact('colums','product'));
    }

    public function getChang()
    {
        $a='sp moi';
        return view('admin.product.chang',compact('a'));
    }

    public function postChang(Request $request)
    {
        // $this->productRepo->Edit($request,$slug);
        // return redirect()->route('admin.levelController.index')->with('success', 'Update level Successfully!');
    }

    public function getEdit($slug)
    {
        $level=$this->productRepo->Find($slug);
        return view('admin.product.sua',compact('level'));
    }

    public function postEdit(Request $request,$slug)
    {
        $this->productRepo->Edit($request,$slug);
        return redirect()->route('admin.adminProductcontroller.index')->with('success', 'Update level Successfully!');
    }

    public function getDelete($slug)
    {
        $this->productRepo->Delete($slug);
        return redirect()->route('admin.adminProductcontroller.index')->with('success', 'Dleted level Successfully!');
    }
}
