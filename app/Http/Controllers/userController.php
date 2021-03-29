<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\admin\qlUser\userRepositoryInterface;

class userController extends Controller
{
    protected $userRepo;

    public function __construct(userRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getindex()
    {
        $user = $this->userRepo->getUser();
        return view('admin.qlUser.index',compact('user'));
    }
    public function getChang()
    {
        return view('admin.qlUser.thaydoi');
    }
}
