<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class AdminQuestionDeleteController extends Controller
{
    public function delete($big_question_id, $question_id)
    {
        // $items = Question::whereHas('big_question', function ($query) use ($big_question_id) {
        //     $query->where('order_num', $big_question_id);
        // })->get();
        $question = Question::Prefecture($big_question_id)->get();
        return view('auth.question_delete', ['question'=>$question , 'big_question_id' => $big_question_id, 'question_id'=>$question_id]);
    }

    public function remove(Request $request)
    {
        Question::where('place_name', $request->name)->delete();
        return redirect('/admin/detail/' . $request->big_question_id);
    }
}
