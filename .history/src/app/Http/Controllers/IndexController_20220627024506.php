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
        $today = StudyData::whereDate('study_date', date('Y-m-d'))->sum('study_hour');
        // //今月の学習時間
        $month = StudyData::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_hour');
        // //合計学習時間
        $total = StudyData::sum('study_hour');

        $lang = StudyData::leftJoin('languages', 'records.language_id', '=', 'languages.id')
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


        $data = [
            'today' => $today,
            'month' => $month,
            'total' => $total,
            'lang' =>$lang,
            'content' => $content,
            'bar' => $
        ];

        return view('index', $data);
    }
}
