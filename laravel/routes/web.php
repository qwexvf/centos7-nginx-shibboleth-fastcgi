<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*----------------------------
フロント
-----------------------------*/
Route::get('/', 'Front\TopController@index')->middleware('user');

//Route::get('/', function () {
//    return view('welcome');
//});

//Routeで処理するパターン
//Route::get('/', 'TopController@index')->middleware('user');

//履歴コース一覧
Route::any('/course', function(){
	return view('front.site.course.index');
});

//キャリアビジョン
Route::any('/career', function(){
        return view('front.site.career.index');
});

Route::any('/career/list', function(){
        return view('front.site.career.list');
});


//プロフィール
Route::any('/profile', 'Front\MemberController@index')->middleware('user');
Route::any('/profile/edit', 'Front\MemberController@edit')->middleware('user');

//お問い合わせ
Route::get('/contact', 'Front\ContactController@index');
Route::post('/contact/confirm', 'Front\ContactController@confirm');
Route::any('/contact/complete', 'Front\ContactController@complete');

//成果物登録
Route::get('/delivery/submit/{id}', 'Front\DeliveryController@input');

//お知らせ
Route::get('/info', 'Front\InfoController@index');

//成果物
Route::get('/delivery/', 'Front\DeliveryController@index');
Route::get('/delivery/detail/{id}', 'Front\DeliveryController@detail');

//ケイパビリティ
Route::get('/competency/', 'Front\CompetencyController@index');
Route::get('/competency/{id}', 'Front\CompetencyController@detail');

//レビュー
Route::get('/review/', 'Front\ReviewController@index');

//Resume
Route::get('/resume/', 'Front\ResumeController@index');
Route::any('/resume/edit', 'Front\ResumeController@edit')->middleware('user');


/*----------------------------
管理者画面
-----------------------------*/
Route::get('/faoeiohafhieaoie/login/', 'Admin\LoginController@index');
Route::get('/faoeiohafhieaoie/', 'Admin\TopController@index');

//お知らせ
Route::get('/faoeiohafhieaoie/info/list', 'Admin\InfoController@index');

//学生
Route::get('/faoeiohafhieaoie/student/list', 'Admin\StudentController@index');
Route::get('/faoeiohafhieaoie/student/detail/{id}', 'Admin\StudentController@detail');
Route::get('/faoeiohafhieaoie/student/edit/{id}', 'Admin\StudentController@edit');
Route::get('/faoeiohafhieaoie/resume/detail/{id}', 'Admin\ResumeController@detail');

//成果物
Route::get('/faoeiohafhieaoie/experience/list', 'Admin\DeliveryController@index');
Route::get('/faoeiohafhieaoie/experience/detail/{id}', 'Admin\DeliveryController@detail');
Route::get('/faoeiohafhieaoie/experience/edit/{id}', 'Admin\DeliveryController@edit');

//コンピテンシー
Route::get('/faoeiohafhieaoie/competency/list', 'Admin\CompetencyController@index');
Route::get('/faoeiohafhieaoie/competency/detail/{id}', 'Admin\CompetencyController@detail');
Route::get('/faoeiohafhieaoie/competency/edit/{id}', 'Admin\CompetencyController@edit');

//キャリア
Route::get('/faoeiohafhieaoie/career/list', 'Admin\CareerController@index');
Route::get('/faoeiohafhieaoie/career/detail/{id}', 'Admin\CareerController@detail');
Route::get('/faoeiohafhieaoie/career/edit/{id}', 'Admin\CareerController@edit');

//メンター
Route::get('/faoeiohafhieaoie/memtor/list', 'Admin\MemtorController@index');
Route::get('/faoeiohafhieaoie/memtor/detail/{id}', 'Admin\MemtorController@detail');
Route::get('/faoeiohafhieaoie/memtor/edit/{id}', 'Admin\MemtorController@edit');

//管理ユーザ
Route::get('/faoeiohafhieaoie/user/list', 'Admin\UserController@index');
Route::get('/faoeiohafhieaoie/user/detail/{id}', 'Admin\UserController@detail');
Route::get('/faoeiohafhieaoie/user/edit/{id}', 'Admin\UserController@edit');

/*----------------------------
共通参照画面
-----------------------------*/
Route::get('/faoeiohafhieaoie/review/detail/{id}', 'Admin\ReviewController@index');
Route::get('/faoeiohafhieaoie/resume/detail/{id}', 'Admin\ResumeController@index');
Route::get('/faoeiohafhieaoie/delivery/', 'Admin\DeliveryController@index');
Route::get('/faoeiohafhieaoie/delivery/detail/{id}', 'Admin\DeliveryController@detail');




