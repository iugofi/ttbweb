<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendKeyEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $main_key;
    protected $payment_intent;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->email = $email;
        $this->main_key = $main_key;
        $this->payment_intent = $payment_intent;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('Mail.sendkey', ['main_key' => $this->main_key, 'payment_intent' => $this->payment_intent], function ($message) {
            $message->to($this->email)->subject('TTB Internet Security Vpn Key');
        });
    }
}
