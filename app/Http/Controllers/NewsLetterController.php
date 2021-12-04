<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribe;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        return view('events.index');
    }
    public function subscribe(Request $request)
    {
        $request->validate([
    'email'=>'required|email|unique:newsletter,email'
    ]);
        event(new UserSubscribe($request->input('email')));
        return back();
    }
}
