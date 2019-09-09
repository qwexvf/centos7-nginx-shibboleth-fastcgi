<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{

    //Constructで処理するパターン
    public function __construct()
    {
        $this->middleware('user');
    }

    /*
     * サンプル
     * @param boolean  hogehoge
     * @return hogehoge
    */
    public function input(Request $req)
    {

	return view('front.site.delivery.input');

    }
    //

    public function index(Request $req)
    {

        return view('front.site.review.index');

    }
    //

    public function detail(Request $req)
    {

        return view('front.site.delivery.detail');

    }
    //


}
