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
                'study_content' => 'N予備校',
                'color' => '1071BD'
            ],
            [
                'study_content' => 'ドットインストール',
                'color' => '20BEDE'
            ]
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
