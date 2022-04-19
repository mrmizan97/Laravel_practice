<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\Invoicepaind;
use Illuminate\Support\Facades\Notification;

class InvoicePaidController extends Controller
{

    public function sendNotification(){
        $user=User::first();

        $data=[
            'body'=>'Your invoice message',
            'text'=>'you have paid',
            'url'=>url('/'),
            'thankyou'=>'Thank you for paind'
        ];
        // $user->notify(new Invoicepaind($data));
        Notification::send($user,new Invoicepaind($data));
    }
}
