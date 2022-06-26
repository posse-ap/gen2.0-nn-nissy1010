<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $items = BigQuestion::all();
        $user = Auth::user();
        $sort = $request->sort;
        $param = ['sort' => $sort, 'user' => $user, 'items' => $items];
        return view('auth.index',$param);
    }

    public function getAuth(Request $request)
    {
        $param = ['message' =>'ログインして下さい。'];
        return view('auth.login', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            $msg = 'ログインしました。(' . Auth::user()->name . ')';
        }else{
            $msg = 'ログインに失敗しました。';
        }
        return view('auth.login', ['message' => $msg]);
    }
}
