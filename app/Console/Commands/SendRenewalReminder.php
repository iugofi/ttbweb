<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendRenewalReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:send-renewal-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send renewal reminder to users with subscription expiring in 1 day';

    /**
     * Execute the console command.
     *
     * @return int
     */

     public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        // Fetch users with day_difference = 1
        $reminders = DB::table('usersall')
            ->select('usersall.*')
            ->where('id','=',28)
            ->get();

        foreach ($reminders as $reminder) {
            // Send email (you need to implement the mailable)
            Mail::to($reminder->email)->send(new \App\Mail\SubscriptionRenewalReminder($reminder));
        }

        $this->info('Renewal reminders sent successfully!');
    }
}
