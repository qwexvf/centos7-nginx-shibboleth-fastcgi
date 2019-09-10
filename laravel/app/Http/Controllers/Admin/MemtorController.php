<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemtorController extends Controller
{


    public function index(Request $req)
    {

        return view('admin.site.memtor.index');

    }
    //

    public function detail(Request $req)
    {


        return view('admin.site.memtor.detail');

    }
    //


}
