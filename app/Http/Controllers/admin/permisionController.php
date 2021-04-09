<?php

namespace App\Http\Controllers\admin;
use App\Repositories\admin\permision\permisionRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class permisionController extends Controller
{
    protected $permisionRepo;

    public function __construct(permisionRepositoryInterface $permisionRepo)
    {
        $this->permisionRepo = $permisionRepo;
    }

    public function getindex()
    {
        $colums = ['Name', 'Slug'];
        $permision=$this->permisionRepo->Permision();
        return view('admin.permision.index', compact('colums','permision'));
    }
    public function getEdit($slug)
    {
        $permision=$this->permisionRepo->Find($slug);
        //dd($qlevel);
        return view('admin.permision.sua',compact('permision'));
    }

    public function postEdit(Request $request,$slug)
    {
        $this->permisionRepo->Edit($request,$slug);
        return redirect()->route('admin.permisionController.index')->with('success', 'Update Permision Successfully!');
    }

    public function getDelete($slug)
    {
        $this->permisionRepo->Delete($slug);
        return redirect()->route('admin.permisionController.index')->with('success', 'Dleted Permision Successfully!');
    }
}
