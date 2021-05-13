<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\admin\level\levelRepositoryInterface;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
class levelController extends Controller
{
    protected $levelRepo;

    public function __construct(levelRepositoryInterface $levelRepo)
    {
        $this->levelRepo = $levelRepo;
    }

    public function getindex()
    {
        $colums = ['Tên quyền','Slug', 'Mô tả'];
        $level=$this->levelRepo->Level();
        return view('admin.level.index',compact('colums','level'));
    }

    public function getEdit($slug)
    {
        $level=$this->levelRepo->Find($slug);
        return view('admin.level.sua',compact('level'));
    }

    public function postEdit(Request $request,$slug)
    {
        $this->levelRepo->Edit($request,$slug);
        return redirect()->route('admin.levelController.index')->with('success', 'Update level Successfully!');
    }

    public function getDelete($slug)
    {
        $this->levelRepo->Delete($slug);
        return redirect()->route('admin.levelController.index')->with('success', 'Dleted level Successfully!');
    }
   
}
