<?php

namespace App\Listeners;

use App\Events\UserSubscribe;
use App\Mail\UserSubscribeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailOwnerAboutSubscription
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserSubscribe $event)
    {
        DB::table('newsletter')->insert([
            'email'=>$event->email
        ]);
        Mail::to($event->email)->send(new UserSubscribeMail());
    }
}
