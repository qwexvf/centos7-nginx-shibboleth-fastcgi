<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{

    //Constructで処理するパターン
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index(Request $req)
    {

        return view('mentor.site.review.index');

    }
    //

    public function detail(Request $req)
    {

        return view('mentor.site.delivery.detail');

    }
    //


}
