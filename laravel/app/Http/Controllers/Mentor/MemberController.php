<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
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

	//更新
	if($req->isMethod('post')){
		$params = $req->all();
		$user = \App\User::find($req['user_id']);
		$user->name = $params['name'];
		$user->email = $params['email'];
		$user->save();

	        \Session::flash('flash_message', 'Update Completed');
		return redirect('/profile');

	}

	return view('front.site.user.index');

    }
    //

    public function edit(Request $req)
    {

        //更新
        if($req->isMethod('post')){
                $params = $req->all();
                $user = \App\User::find($req['user_id']);
                $user->name = $params['name'];
                $user->email = $params['email'];
                $user->save();

                \Session::flash('flash_message', 'Update Completed');
                return redirect('/profile');

        }

        return view('front.site.user.input');

    }
    //

}
