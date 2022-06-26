<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'question_id' => 1,
            'question_num' => 1,
            'name' => 'たかなわ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 1,
            'question_num' => 1,
            'name' => 'たかわ',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 1,
            'question_num' => 1,
            'name' => 'こうわ',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'question_num' => 2,
            'name' => 'かめいど',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'question_num' => 2,
            'name' => 'かめど',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'question_num' => 2,
            'name' => 'かめと',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'question_num' => 3,
            'name' => 'こうじまち',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'question_num' => 3,
            'name' => 'かゆまち',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'question_num' => 3,
            'name' => 'おかとまち',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'question_num' => 4,
            'name' => 'おなりもん',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'question_num' => 4,
            'name' => 'おかどもん',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'question_num' => 4,
            'name' => 'ごせいもん',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'question_num' => 5,
            'name' => 'とどりき',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'question_num' => 5,
            'name' => 'たたら',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'question_num' => 5,
            'name' => 'たたりき',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'question_num' => 6,
            'name' => 'しゃくじい',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'question_num' => 6,
            'name' => 'いじい',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'question_num' => 6,
            'name' => 'せきこうい',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'question_num' => 1,
            'question_num' => 1,
            'name' => 'むかいなだ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'question_num' => 1,
            'name' => 'むきひら',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 7,
            'question_num' => 1,
            'name' => 'むこうひら',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'question_num' => 2,
            'name' => 'みつぎ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'question_num' => 2,
            'name' => 'おしらべ',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 8,
            'question_num' => 2,
            'name' => 'みよし',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'question_num' => 3,
            'name' => 'ぎんざん',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'question_num' => 3,
            'name' => 'きやま',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 9,
            'question_num' => 3,
            'name' => 'かなやま',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'question_num' => 4,
            'name' => 'とよひ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'question_num' => 4,
            'name' => 'としか',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 10,
            'question_num' => 4,
            'name' => 'とよか',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

    }
}
