<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\StudyRecord;
use App\StudyLanguage;
use App\StudyContent;


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
        $today = StudyRecord::whereDate('study_date', date('Y-m-d'))->sum('study_hour');
        // //今月の学習時間
        $month = StudyRecord::whereYear('study_date', date('Y'))->whereMonth('study_date', date('m'))->sum('study_hour');
        // //合計学習時間
        $total = StudyRecord::sum('study_hour');


        $languages = StudyLanguage::with('records')->get()->groupBy('study_date')->first();

        // 円グラフ（内容）

        $contents = StudyContent::with('records')->get()->groupBy('study_date')->first();

        // 棒グラフ
        $bars = StudyRecord::select(DB::raw("SUM(study_hour) as sum") , 'study_date')
        ->groupBy('study_date')
        ->havingRaw(" DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')")
        ->get();

        $test3 = StudyRecord::where("DATE_FORMAT(study_date, '%M/%Y')", '=', test2')->get()->groupBy('study_date');


        $data = [
            'today' => $today,
            'month' => $month,
            'total' => $total,
            'languages' => $languages,
            'contents' => $contents,
            'bars' => $bars,
            'test3' => $test3
        ];

        return view('index', $data);
    }
}
