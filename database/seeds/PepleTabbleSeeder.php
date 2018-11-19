<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PepleTabbleSeeder extends Seeder
{




     /**

     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [

         'name' =>'taro',
         'mail' => 'taro@yamada.jp',
         'age' => 12,

        ];

        DB::table('people')->insert($param);

        $param = [
        	'name' => 'hanako',
            'mail'=> 'hanakoko@happy.jp',
            'age'=> 34,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail'=> 'sachiko@happy.jp',
            'age'=> 56,
        ];

        DB::table('people')->insert($param);


    }
}
