<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;

class AdminDeleteController extends Controller
{
    public function delete($big_question_id)
    {
        $item = BigQuestion::find($big_question_id);
        return view('auth.delete', ['item' => $item , 'big_question_id' => $big_question_id]);
    }

    public function remove(Request $request)
    {
        BigQuestion::find($request->id)->delete();
        return redirect('/admin/list');
    }
}
