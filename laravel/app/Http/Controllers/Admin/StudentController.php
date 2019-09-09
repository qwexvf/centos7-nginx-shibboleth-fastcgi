<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function input(Request $req)
    {

	return view('front.site.delivery.input');

    }
    //

    public function index(Request $req)
    {

        return view('admin.site.student.index');

    }
    //

    public function detail(Request $req)
    {


        return view('admin.site.student.detail');

    }
    //


}
