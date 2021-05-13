<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\admin\chitietDM\chitietDMRepositoryInterface;
use RealRashid\SweetAlert\Facades\Alert;
class adminChiTietDanhMucController extends Controller
{
    protected $chitietCMRepo;

    public function __construct(chitietDMRepositoryInterface $chitietCMRepo)
    {
        $this->chitietCMRepo = $chitietCMRepo;
    }

    public function getindex()
    {
        $colums = ['Tên hiển thị','Danh mục hiển thị', 'Tên không dấu'];
        $product=$this->chitietCMRepo->chitietDM();
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
        $level=$this->chitietCMRepo->Find($slug);
        return view('admin.product.sua',compact('level'));
    }

    public function postEdit(Request $request,$slug)
    {
        $this->chitietCMRepo->Edit($request,$slug);
        return redirect()->route('admin.adminProductcontroller.index')->with('success', 'Update level Successfully!');
    }

    public function getDelete($slug)
    {
        $this->chitietCMRepo->Delete($slug);
        return redirect()->route('admin.adminProductcontroller.index')->with('success', 'Dleted level Successfully!');
    }
}
