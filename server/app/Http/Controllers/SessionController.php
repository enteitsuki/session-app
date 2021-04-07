<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('session.index');
    }

    public function store(Request $request)
    {
        //セッションへ値を保存
        $request->session()->put('text', $request->input('text'));
        //次のリクエスト間だけセッションを保持
        $request->session()->flash('msg', 'セッションに保存されました');

        return redirect('session');
    }

    public function delete(Request $request)
    {
        //session破棄
        $request->session()->forget('text');
        return view('session.delete');
    }
}