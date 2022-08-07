<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\StudyData;
use App\StudyLanguage;
use App\StudyContent;

class IndexController extends Controller
{
    public function index()
    {
        // 今日の学習時間
        $today = StudyData::whereDate('study_date', date('Y-m-d'))->sum('study_time');
        // //今月の学習時間
        $month = StudyData::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_time');
        // //合計学習時間
        $total = StudyData::sum('study_time');

        $data = [
            'choices' => $choices,
            'questions' => $questions,
            'question_id' =>$question_id,
            'big_question_id' => $big_question_id,
        ];

        return view('index');
    }
}
