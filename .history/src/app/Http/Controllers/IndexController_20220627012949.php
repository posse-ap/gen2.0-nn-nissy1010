<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\StudyData;

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

        $choices = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id);
        })->where('question_num', $question_id)->get();

        // 円グラフ（言語）
        $lang = StudyData::whereHas('study_lungages', function ($query) use ($big_question_id) {
            $query->:whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'));
        })
            ->select('languages.language', DB::raw("SUM(records.study_time) as sum"), 'languages.colour')
            ->groupBy('languages.language', 'languages.colour')
            ->get();

        // 円グラフ（内容）
        $content = StudyData::leftJoin('contents', 'records.content_id', '=', 'contents.id')
            ->select('contents.content', DB::raw("SUM(records.study_time) as sum"))
            ->groupBy('contents.content')
            ->get();

        // 棒グラフ
        $bar = StudyData::select(DB::raw("SUM(study_time) as sum"))
            ->groupBy('study_date')
            ->havingRaw(" DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')")
            ->get();
        return view('index');
    }
}