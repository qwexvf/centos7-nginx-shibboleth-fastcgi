<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{

    /*
	//参考ドキュメント（属性定義など参照）
	https://readouble.com/laravel/5.8/ja/migrations.html
	
	//カラム変更時はマイグレーション前に下記を実行
	composer require doctrine/dbal

	//コマンド
	php artisan migrate マイグレーション
	php artisan migrate:rollback 直近のロールバック

    */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

	//テーブル作成の場合
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

	//テーブル更新の場合
	/*
        Schema::connection('user_data')->table('users', function($table){
            $table->integer('age')->after('name')->default(0);
        });
	*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
