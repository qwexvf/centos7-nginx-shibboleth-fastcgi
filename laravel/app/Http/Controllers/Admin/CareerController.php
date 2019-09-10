<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{

    public function index(Request $req)
    {

        return view('admin.site.career.index');

    }
    //

    public function detail(Request $req)
    {

        return view('admin.site.career.detail');

    }
    //


}
