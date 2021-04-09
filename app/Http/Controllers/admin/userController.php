<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Repositories\admin\qlUser\userRepositoryInterface;
use App\Repositories\admin\level\levelRepositoryInterface;
use App\Http\Controllers\Controller;
use App\View\Components\admin\form;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    protected $userRepo;
    protected $levelRepo;

    public function __construct(userRepositoryInterface $userRepo,levelRepositoryInterface $levelRepo)
    {
        $this->userRepo = $userRepo;
        $this->levelRepo = $levelRepo;
    }

    public function getindex()
    {
        $colums = ['Name', 'Email', 'Address', 'Sdt', 'Level'];
        $user=$this->userRepo->User();
        return view('admin.qlUser.index', compact('colums','user'));
    }
    public function getEdit($slug)
    {
        $user=$this->userRepo->Find($slug);
        $level=$this->levelRepo->Level();
        $qlevel=$this->userRepo->Find($slug)->pluck('level_id');
        //dd($qlevel);
        return view('admin.qlUser.sua',compact('user','level','qlevel'));
    }

    public function postEdit(Request $request,$slug)
    {
        $this->userRepo->Edit($request,$slug);
        return redirect()->route('admin.userController.index')->with('success', 'Update User Successfully!');
    }

    public function getDelete($slug)
    {
        $this->userRepo->Delete($slug);
        return redirect()->route('admin.userController.index')->with('success', 'Dleted User Successfully!');
    }
}
