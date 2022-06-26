<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use App\Question;
use App\Choice;

class quizyController extends Controller
{

    public function index($big_question_id)
    {

        $valid = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id)->valid();
        })->get();
        $choices = Choice::whereHas('question', function ($query) use ($big_question_id) {
            $query->where('big_question_id', $big_question_id);
        })->get();
        $items = Question::prefecture($big_question_id)->get();
        $data = [
            'items'=>$items,
            'choices'=>$choices,
            'valid'=>$valid,
            'big_question_id'=>$big_question_id,
        ];
        return view('quizy.quizy', $data);
    }

    public function post()
    {
        return view('quizy.quizy',['msg'=>'ポストあったよ']);
    }

}
