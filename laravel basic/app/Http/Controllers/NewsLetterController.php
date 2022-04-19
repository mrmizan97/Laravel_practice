<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribe;
use App\Mail\CustomerJobMail;
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

    public function sendMail()
    {
        dispatch(new CustomerJobMail())->delay(now()->addMinutes(1));
        dd("Email has been delivered");
    }
}
