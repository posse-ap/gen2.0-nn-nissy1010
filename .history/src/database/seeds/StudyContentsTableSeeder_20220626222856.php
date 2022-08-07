<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'study_content' => 'ドットインストール',
                'color' => '1754EF'
            ],
            [
                'study_content' => 'ドットインストール',
                'color' => '1754EF'
            ],
            [
                'study_content' => 'ドットインストール',
                'color' => '1754EF'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
