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
	/*
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
	*/

	//capabilityCategories
        Schema::create('capability_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
	    $table->smallInteger('status');
            $table->timestamps();
        }); 

	//capabilities
        Schema::create('capabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('capability_category_id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

	//capabilitySteps
        Schema::create('capability_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('capability_id');
            $table->smallInteger('step_number');
            $table->smallInteger('check_start_number');
            $table->timestamps();
        });

	//curriculums
        Schema::create('curriculums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('teacher_id');
            $table->timestamps();
        });

	//curriculumCapabilities
        Schema::create('curriculum_capabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('curriculum_id');
            $table->smallInteger('capability_id');
            $table->timestamps();
        });

	//optionalCapabilities
        Schema::create('optional_capabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('curriculum_id');
            $table->smallInteger('capability_id');
            $table->timestamps();
        });

	//Careergoals
        Schema::create('careergoals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img_path');
            $table->string('description');
            $table->timestamps();
        });

	//Modelcompetencies
        Schema::create('modelcompetencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

	//Classrooms
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('curriculum_id');
	    $table->date('start_period');	
	    $table->date('end_period');	
            $table->timestamps();
        });

	//Teacher
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('img_path');
            $table->timestamps();
        });

	//Reviewers
        Schema::create('reviewers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

	//Mentors
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

	//Students
        Schema::create('stundents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

	//StudentCarriculums
        Schema::create('stundent_carriculums', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('student_id');
            $table->smallInteger('curriculum_id');
            $table->timestamps();
        });

	//Deliveries
        Schema::create('deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('student_id');
            $table->smallInteger('curriculum_id');
            $table->string('description');
            $table->timestamps();
        });

	//DeliveriyCapabilities
        Schema::create('delivery_capabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('delivery_id');
            $table->smallInteger('capability_id');
            $table->smallInteger('type');
            $table->timestamps();
        });

	//Files
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('delivery_id');
            $table->smallInteger('type');
            $table->string('title');
            $table->timestamps();
        });

	//StudentCapablrity
        Schema::create('student_capabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('student_id');
            $table->smallInteger('capability_id');
            $table->smallInteger('type');
            $table->timestamps();
        });

	//StudentCapablrity_gems
        Schema::create('student_capablrity_gems', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('student_capability_id');
            $table->smallInteger('gem');
            $table->timestamps();
        });


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
