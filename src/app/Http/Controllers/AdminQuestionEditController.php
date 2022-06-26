<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Choice;

class AdminQuestionEditController extends Controller
{
    public function index(Request $request, $big_question_id, $question_id)
    {
        $question = Question::Prefecture($big_question_id)->get();
        return view('auth.question_edit', ['big_question_id'=>$big_question_id, 'question_id'=>$question_id, 'question'=>$question]);
    }

    public function edit(Request $request)
    {
            $this->validate($request, Question::$rules);
            $question = Question::where('place_name',$request->pre_name)->first();
            $question->place_name = $request->place_name;
            $question->big_question_id = $request->big_question_id;
            $question->save();
            return redirect('/admin/detail/' . $request->big_question_id);
    }
}
