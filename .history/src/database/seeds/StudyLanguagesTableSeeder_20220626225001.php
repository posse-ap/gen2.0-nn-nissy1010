<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudyLanguagesTableSeeder extends Seeder
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
                'study_language' => 'JavaScript',
                'color' => '1754EF'
            ],
            [
                'study_content' => 'CSS',
                'color' => '1071BD'
            ],
            [
                'study_content' => 'PHP',
                'color' => '20BEDE'
            ],
            [
                'study_content' => 'HTML',
                'color' => '3CCEFE'
            ],
            [
                'study_content' => 'Lalavel',
                'color' => 'B29EF3'
            ],
            [
                'study_content' => 'SQL',
                'color' => '6D46EC'
            ],
            [
                'study_content' => 'SHELL',
                'color' => '4A18EF'
            ],
            [
                'study_content' => '情報システム基礎知識（その他)',
                'color' => '3105C0'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_')->insert($param);
        }
    }
}
