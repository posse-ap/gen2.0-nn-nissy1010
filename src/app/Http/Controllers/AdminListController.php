<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BigQuestion;

class AdminListController extends Controller
{
    public function index(Request $request)
    {
        $items = BigQuestion::orderBy('order_num', 'asc')->get();
        $count = BigQuestion::count();
        $param = ['items' => $items, 'count' => $count];
        return view('auth.list',$param);
    }

    public function add(Request $request)
    {
        return view('admin/list');
    }

    public function create(Request $request)
    {
        if(!empty($request->input('list_ids'))){
            foreach($request->input('list_ids') as $index => $sort_id){
                $question = BigQuestion::where('id', $sort_id)->first();
                $question->order_num = (int)$index + 1;
                $question->save();
            }
        }elseif(!empty($request->name)){
            $this->validate($request, BigQuestion::$rules);
        $big_question = new BigQuestion;
        $form = $request->all();
        unset($form['_token']);
        $big_question->fill($form)->save();
        }

        return redirect('/admin/list');
    }
}
