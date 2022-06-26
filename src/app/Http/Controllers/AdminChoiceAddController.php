<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;
use App\Question;
use App\Choice;

class AdminChoiceAddController extends Controller
{
    public function index(Request $request, $big_question_id, $question_id)
    {
        $questions = Question::where('big_question_id',$big_question_id)->get();
        $param = ['big_question_id' => $big_question_id,'question_id' => $question_id, 'questions' => $questions];
        return view('auth.choice_add',$param);
    }

    public function post(Request $request)
    {
        $this->validate($request, Choice::$rules);
        $choice = new Choice;
        $form = $request->all();
        unset($form['_token']);
        $choice->fill($form)->save();
        return redirect('/admin/choice/' . $request->big_question_id . '/' . $request->id);
    }
}
