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
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => '2022-3-05',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => 'ドットインストール',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => 'ドットインストール',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => 'ドットインストール',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => 'ドットインストール',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
            [
                'study_date' => 'ドットインストール',
                'study_language_id' => 'ドットインストール',
                'study_content_id' => 'ドットインストール',
                'study_content_id' => '1754EF'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
