<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index(Request $req)
    {

        return view('admin.site.user.index');

    }
    //

    public function detail(Request $req)
    {

        return view('admin.site.user.detail');

    }
    //


}
