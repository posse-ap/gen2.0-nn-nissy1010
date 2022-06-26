<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;
use App\Question;
use App\Choice;

class AdminChoiceController extends Controller
{
    public function index(Request $request, $big_question_id, $question_id)
    {
        $choices = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id);
        })->where('question_num', $question_id)->get();
        $questions = Question::where('big_question_id',$big_question_id)->get();
        $data = [
            'choices' => $choices,
            'questions' => $questions,
            'question_id' =>$question_id,
            'big_question_id' => $big_question_id,
        ];
        return view('auth.choice', $data);
    }

    public function post(Request $request)
    {
        $this->validate($request, Choice::$rules);
        $choice1 = Choice::where('name',$request->pre_name[0])->first();
        $choice1->name = $request->name[0];
        $choice1->question_id = $request->question_id;
        $choice1->question_num = $request->question_num;
        $choice1->valid = 1;
        $choice1->save();

        $this->validate($request, Choice::$rules);
        $choice2 = Choice::where('name',$request->pre_name[1])->first();
        $choice2->name = $request->name[1];
        $choice2->question_id = $request->question_id;
        $choice2->question_num = $request->question_num;
        $choice2->save();

        $this->validate($request, Choice::$rules);
        $choice2 = Choice::where('name',$request->pre_name[2])->first();
        $choice2->name = $request->name[2];
        $choice2->question_id = $request->question_id;
        $choice2->question_num = $request->question_num;
        $choice2->save();

        return redirect('/admin/choice/' . $request->big_question_id . '/' . $request->question_num);
    }

}
