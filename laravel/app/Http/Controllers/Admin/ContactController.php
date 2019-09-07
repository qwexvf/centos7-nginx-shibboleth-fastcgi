<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    //Constructで処理するパターン
    public function __construct()
    {
            $this->middleware('user');
    }

    /*********************************
    問い合わせ画面
    *********************************/
    public function index(Request $req)
    {
	return view('front.site.contact.input');
    } 
    //

    public function confirm(ContactRequest $req)
    {
	//パラメータ取得
	$params = $req->all();

	//セッションに格納
	$req->session()->put('params', $params);

	//view描画
        return view('contact.confirm',compact('params'));	

    }
    //

    public function complete(Request $req)
    {
	//DBに登録
	$all = $req->session()->get('params');
        $today = date('Y-m-d H:i:s');
	DB::beginTransaction();
	try{
        	$sql = DB::insert('insert into contacts (email, user_name, content, created_at) values (?, ?, ?, ?)',
           	[$all['email'], $all['user_name'], $all['content'], $today ]);

		//メール送信
		$params = array(
	   	'email' => $all['email'],
	   	'user_name' => $all['user_name'],
	   	'content' => $all['content']
        	);

        	$address = $all['email'];
        	\Mail::to($address)
          	->send(new \App\Mail\Contact($params));	

		DB::commit();

		//view描画
		return view('contact.complete');
	}catch(Exception $e){
		DB::rollBack();
	}

    }
    //


}
