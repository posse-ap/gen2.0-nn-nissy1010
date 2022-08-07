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
                'study_content' => '',
                'color' => '3CCEFE'
            ],
            [
                'study_content' => 'PHP',
                'color' => 'B29EF3'
            ],
            [
                'study_content' => 'PHP',
                'color' => '6D46EC'
            ],
            [
                'study_content' => 'PHP',
                'color' => '4A18EF'
            ],
            [
                'study_content' => 'PHP',
                'color' => '3105C0'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
