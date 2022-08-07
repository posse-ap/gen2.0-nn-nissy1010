<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\StudyData;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 今日の学習時間
        $today = StudyData::whereDate('study_date', date('Y-m-d'))->sum('study_hour');
        // //今月の学習時間
        $month = StudyData::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_hour');
        // //合計学習時間
        $total = StudyData::sum('study_hour');

        $languages = StudyData::leftJoin('study_languages', 'study_data.study_language_id', '=', 'study_languages.id')
            ->select('study_languages.study_language', DB::raw("SUM(study_data.study_hour) as sum"), 'study_languages.color')
            ->groupBy('study_languages.study_language', 'study_languages.color')
            ->get();

        $test1 = StudyData::with('study_languages')->groupBy('study_date');

        // 円グラフ（内容）
        $contents = StudyData::leftJoin('study_contents', 'study_data.study_content_id', '=', 'study_contents.id')
            ->select('study_contents.study_content', DB::raw("SUM(study_data.study_hour) as sum"), 'study_contents.color')
            ->groupBy('study_contents.study_content', 'study_contents.color')
            ->get();

        $test2 = StudyData::all()->groupBy('study_date');

        // 棒グラフ
        $bars = StudyData::select(DB::raw("SUM(study_hour) as sum") , 'study_date')
        ->groupBy('study_date')
        ->havingRaw(" DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')")
        ->get();

        $test3 = StudyData::all()->groupBy('study_date');


        $data = [
            'today' => $today,
            'month' => $month,
            'total' => $total,
            'languages' => $languages,
            'contents' => $contents,
            'bars' => $bars,
            'test1' => $test1,
            'test2' => $test2,
            'test3' => $test3
        ];

        return view('index', $data);
    }
}
