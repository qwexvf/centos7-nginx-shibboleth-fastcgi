<?php

namespace App\Http\Middleware;

use Closure;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

	//属性情報をShibboleth（orTWINS）から取得(どういう情報を取れるのか確認する）
	$user_id = 1;
	
	//ブランク時はシボレス認証画面へredirect

	//院生名やコース名取得（後々横展開出来る用）などもここで行う
        $request->merge([
            'user_id' => $user_id,
        ]);

        return $next($request);
    }
}
