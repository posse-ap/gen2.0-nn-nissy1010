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

        $languages = StudyRecord::leftJoin('study_languages', 'study_records.study_language_id', '=', 'study_languages.id')
            ->select('study_languages.study_language', DB::raw("SUM(study_records.study_hour) as sum"), 'study_languages.color')
            ->groupBy('study_languages.study_language', 'study_languages.color')
            ->get();

        $test1 = StudyLanguage::with('records')->groupBy('study_date')->get();

        // 円グラフ（内容）
        $contents = StudyRecord::leftJoin('study_contents', 'study_records.study_content_id', '=', 'study_contents.id')
            ->select('study_contents.study_content', DB::raw("SUM(study_records.study_hour) as sum"), 'study_contents.color')
            ->groupBy('study_contents.study_content', 'study_contents.color')
            ->get();

        $test2 = StudyContent::with('records')->groupBy('study_date')->get();

        // 棒グラフ
        $bars = StudyRecord::select(DB::raw("SUM(study_hour) as sum") , 'study_date')
        ->groupBy('study_date')
        ->havingRaw(" DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')")
        ->get();

        $test3 = StudyRecord::all()->groupBy('study_date');


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
