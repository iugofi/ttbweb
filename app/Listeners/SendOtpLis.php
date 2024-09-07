<?php

namespace App\Listeners;

use App\Events\SendOtp;
use App\Mail\OtpMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOtpLis implements ShouldQueue

{
    /**
     * Create the event listener.
     *
     * @return void
     */
    use InteractsWithQueue;


    public function __construct()
    {

    }

    public $tries = 3;

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendOtp  $event
     * @return void
     */
    public function handle(SendOtp $event)
{
    $user = $event->sessionData;
    Mail::to($user['email'])->send(new OtpMail($user));
}
}
