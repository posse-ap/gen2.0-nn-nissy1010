<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;
use App\Question;
use App\Choice;

class AdminDetailController extends Controller
{
    public function index($big_question_id)
    {
        $valid = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id)->valid();
        })->get();
        $choices = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id);
        })->get();
        $items = Question::all();
        // $items = Question::prefecture($big_question_id)->get();
        $big_question = BigQuestion::orderBy('order_num', 'asc')->get();
        $data = [
            'items' => $items,
            'choices' => $choices,
            'valid' => $valid,
            'big_question' => $big_question,
            'big_question_id' => $big_question_id,
        ];
        return view('auth.detail', $data);
    }

    // public function edit(Request $request)
    // {
    //     $big_question = BigQuestion::find($request->id);
    //     return view('admin.detail/' . $request->id, ['form' => $big_question]);
    // }

    public function update(Request $request)
    {
            $big_question = BigQuestion::where('name',$request->pre_name)->first();
            $big_question->name = $request->name;
            $big_question->save();
            return redirect('/admin/detail/' . $request->id);
    }
}
