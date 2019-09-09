<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
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

	return view('admin.site.delivery.input');

    }
    //

    public function index(Request $req)
    {

        return view('admin.site.delivery.index');

    }
    //

    public function detail(Request $req)
    {

        return view('admin.site.delivery.detail');

    }
    //


}
