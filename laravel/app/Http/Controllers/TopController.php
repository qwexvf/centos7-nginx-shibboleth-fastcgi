<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
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
    public function index(Request $req)
    {
echo $req['user_id'];
exit();

    }
    //

}
