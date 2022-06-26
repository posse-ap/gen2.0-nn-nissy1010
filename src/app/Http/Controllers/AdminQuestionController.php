<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class AdminQuestionController extends Controller
{
    public function add(Request $request, $big_question_id)
    {

        return view('auth.question_add', ['big_question_id' => $big_question_id]);
    }

    public function create(Request $request, $big_question_id)
    {
        $this->validate($request, Question::$rules);
        $question = new Question;
        $form = $request->all();
        unset($form['_token']);
        $question->fill($form)->save();
        return redirect('/admin/detail/' . $big_question_id);
    }
}
