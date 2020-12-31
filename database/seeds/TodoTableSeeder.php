<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comments = ['aaa','bbb','ccc'];
        foreach ($comments as $comment) {
          DB::table('todos')->insert([
            'comment' => $comment, //フィールドに対するカラムタイプ指定
            'state' => true, //フィールドに対するカラムタイプ指定
          ]);
        }
    }
}
