<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{

    //Constructで処理するパターン
    public function __construct()
    {
            $this->middleware('user');
    }

    /*********************************
    お知らせ一覧
    *********************************/
    public function index(Request $req)
    {
	return view('admin.site.info.index');
    } 
    //


}
