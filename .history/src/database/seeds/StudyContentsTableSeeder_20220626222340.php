<?php

use Illuminate\Database\Seeder;

class StudyContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_content')->insert(
            [
                [
                    'study_content' => 'taro',
                    'ml' => 'taro@yamada.jp',
                    'age' => 12,
                ],
            ]
        )
    }
}
