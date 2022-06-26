<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'big_question_id' => 1,
            'place_name' => '高輪',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'place_name' => '亀戸',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'place_name' => '麹町',
        ];
        DB::table('questions')->insert($param);



        $param = [
            'big_question_id' => 1,
            'place_name' => '御成門',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'place_name' => '等々力',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'place_name' => '石神井',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'place_name' => '向洋',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'place_name' => '御調',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'place_name' => '銀山',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'place_name' => '十四日',
        ];
        DB::table('questions')->insert($param);
    }
}
