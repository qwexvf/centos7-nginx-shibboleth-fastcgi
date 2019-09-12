<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function index(Request $req)
    {

        return view('mentor.site.student.index');

    }
    //

    public function detail(Request $req)
    {

        return view('mentor.site.student.detail');

    }
    //


}
