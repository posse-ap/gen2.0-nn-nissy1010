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
                'study_content' => ,
                'color' => '1754EF'
            ],
            [
                'big_question_id' => 1,
                'image' => 'kameido.png',
            ],
            [
                'big_question_id' => 2,
                'image' => 'mukainada.png'
            ],
            [
                'big_question_id' => 2,
                'image' => 'mitsugi.png'
            ],
        ];

        foreach ($params as $param) {
            DB::table('study_contents')->insert($param);
        }
    }
}
