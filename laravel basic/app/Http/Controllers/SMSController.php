<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
class SMSController extends Controller
{
    public function sendSMS(){
        Nexmo::message()->send([
            'to'=>'receiver',
            'from'=>'sender',
            'text'=>'Test SMS'
        ]);
        echo "SMS sent!";
    }

}
