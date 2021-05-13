<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class adminController extends Controller
{
    public function getindex()
    {
        return view('admin.index');
    }
}
