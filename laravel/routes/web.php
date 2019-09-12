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
Route::get('/'.\Config::get('common.admin_url').'/login/', 'Admin\LoginController@index')->name('admin.login');

//お知らせ
Route::get('/'.\Config::get('common.admin_url').'/info/list', 'Admin\InfoController@index')->name('admin.informations.list');

//学生
Route::get('/'.\Config::get('common.admin_url').'/student/list', 'Admin\StudentController@index')->name('admin.students.list');
Route::get('/'.\Config::get('common.admin_url').'/student/detail/{id}', 'Admin\StudentController@detail')->name('admin.students.detail');
Route::get('/'.\Config::get('common.admin_url').'/student/edit/{id}', 'Admin\StudentController@edit')->name('admin.students.edit');
Route::get('/'.\Config::get('common.admin_url').'/resume/detail/{id}', 'Admin\ResumeController@detail')->name('admin.students.resume');

//成果物
Route::get('/'.\Config::get('common.admin_url').'/list', 'Admin\DeliveryController@index')->name('admin.experiences.list');
Route::get('/'.\Config::get('common.admin_url').'/experience/detail/{id}', 'Admin\DeliveryController@detail')->name('admin.experiences.detail');
Route::get('/'.\Config::get('common.admin_url').'/experience/edit/{id}', 'Admin\DeliveryController@edit')->name('admin.experiences.edit');

//コンピテンシー
Route::get('/'.\Config::get('common.admin_url').'/competency/list', 'Admin\CompetencyController@index')->name('admin.competencies.list');
Route::get('/'.\Config::get('common.admin_url').'/competency/detail/{id}', 'Admin\CompetencyController@detail')->name('admin.competencies.detail');
Route::get('/'.\Config::get('common.admin_url').'/competency/edit/{id}', 'Admin\CompetencyController@edit')->name('admin.competencies.edit');

//キャリア
Route::get('/'.\Config::get('common.admin_url').'/career/list', 'Admin\CareerController@index')->name('admin.careers.list');
Route::get('/'.\Config::get('common.admin_url').'/career/detail/{id}', 'Admin\CareerController@detail')->name('admin.careers.detail');
Route::get('/'.\Config::get('common.admin_url').'/career/edit/{id}', 'Admin\CareerController@edit')->name('admin.careers.edit');

//メンター
Route::get('/'.\Config::get('common.admin_url').'/memtor/list', 'Admin\MemtorController@index')->name('admin.mentors.list');
Route::get('/'.\Config::get('common.admin_url').'/memtor/detail/{id}', 'Admin\MemtorController@detail')->name('admin.mentors.detail');
Route::get('/'.\Config::get('common.admin_url').'/memtor/edit/{id}', 'Admin\MemtorController@edit')->name('admin.mentors.edit');

//管理ユーザ
Route::get('/'.\Config::get('common.admin_url').'/user/list', 'Admin\UserController@index')->name('admin.users.list');
Route::get('/'.\Config::get('common.admin_url').'/user/detail/{id}', 'Admin\UserController@detail')->name('admin.users.detail');
Route::get('/'.\Config::get('common.admin_url').'/user/edit/{id}', 'Admin\UserController@edit')->name('admin.users.edit');

/*----------------------------
メンター画面
-----------------------------*/
//学生
Route::get('/'.\Config::get('common.mentor_url').'/students', 'Mentor\StudentController@index')->name('mentor.students.list');
Route::get('/'.\Config::get('common.mentor_url').'/students/{id}', 'Mentor\StudentController@detail')->name('mentor.students.detail');
Route::get('/'.\Config::get('common.mentor_url').'/students/{id}/edit', 'Mentor\StudentController@edit')->name('mentor.students.edit');
Route::get('/'.\Config::get('common.mentor_url').'/resumes/{id}', 'Mentor\ResumeController@detail')->name('mentor.resumes.detail');

//成果物
Route::get('/'.\Config::get('common.mentor_url').'/expericnes', 'Mentor\DeliveryController@index')->name('mentor.experiences.list');
Route::get('/'.\Config::get('common.mentor_url').'/student/experiences/{id}', 'Mentor\DeliveryController@index')->name('mentor.experiences.student.list');

Route::get('/'.\Config::get('common.mentor_url').'/experiences/{id}', 'Mentor\DeliveryController@detail')->name('mentor.experiences.detail');
Route::get('/'.\Config::get('common.mentor_url').'/experiences/{id}/edit', 'Mentor\DeliveryController@edit')->name('mentor.experiences.edit');

//レビュー
Route::get('/'.\Config::get('common.mentor_url').'/review/{id}', 'Mentor\ReviewController@index')->name('mentor.review.detail');

//レビュー
Route::get('/'.\Config::get('common.mentor_url').'/resume/{id}', 'Mentor\ResumeController@index')->name('mentor.resume.detail');

//お知らせ
Route::get('/'.\Config::get('common.mentor_url').'/info/list', 'Mentor\InfoController@index')->name('mentor.informations.list');

/*----------------------------
共通参照画面
-----------------------------*/
Route::get('/faoeiohafhieaoie/review/detail/{id}', 'Admin\ReviewController@index');
Route::get('/faoeiohafhieaoie/resume/detail/{id}', 'Admin\ResumeController@index');
Route::get('/faoeiohafhieaoie/delivery/', 'Admin\DeliveryController@index');
Route::get('/faoeiohafhieaoie/delivery/detail/{id}', 'Admin\DeliveryController@detail');




