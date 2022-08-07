<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudyDataTableSeeder extends Seeder
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
                'study_date' => '2022-3-05',
                'study_language_id' => 1,
                'study_content_id' => 1,
                'study_hour' => 1
            ],
            [
                'study_date' => '2022-3-06',
                'study_language_id' => 4,
                'study_content_id' => 2,
                'study_hour' => 3
            ],
            [
                'study_date' => '2022-3-07',
                'study_language_id' => 5,
                'study_content_id' => 2,
                'study_hour' => 2
            ],
            [
                'study_date' => '2022-3-08',
                'study_language_id' => 8,
                'study_content_id' => 3,
                'study_hour' => 1
            ],
            [
                'study_date' => '2022-3-09',
                'study_language_id' => 7,
                'study_content_id' => 1,
                'study_hour' => 3
            ],
            [
                'study_date' => '2022-4-17',
                'study_language_id' => 2,
                'study_content_id' => 1,
                'study_hour' => 2
            ],
            [
                'study_date' => '2022-4-17',
                'study_language_id' => 3,
                'study_content_id' => 2,
                'study_hour' => 1
            ],
            [
                'study_date' => '2022-5-17',
                'study_language_id' => '5',
                'study_content_id' => '3',
                'study_hour' => '2'
            ],
            [
                'study_date' => '2022-5-17',
                'study_language_id' => '6',
                'study_content_id' => '1',
                'study_hour' => '3'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
