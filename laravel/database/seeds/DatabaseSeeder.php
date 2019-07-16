<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Seeder作成時 command:php artisan make:seeder TestSeeder
     * Seeder実行時 command:php artisan db:seed
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	$this->call(InitTableSeeder::class);
    }
}
