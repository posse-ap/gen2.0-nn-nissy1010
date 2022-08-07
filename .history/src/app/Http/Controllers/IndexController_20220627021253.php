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
    
        return view('index');
    }
}
