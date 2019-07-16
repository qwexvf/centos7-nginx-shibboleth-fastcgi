<?php

use Illuminate\Database\Seeder;

class InitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*--------------------------
 	サンプル
        ---------------------------*/
	//データ定義
        $sample = array(
                [
                'user_id' => 1,
                'status' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                ],
	);

	//登録
	foreach($sample as $s){
          DB::table('sample')->insert(
           [
                'user_id' => $a['user_id'],
                'status' => $a['status'],
                'comment' => $a['comment'],
                'created_at' => $a['created_at'],
           ]
          );
        }

     }
     //

}
