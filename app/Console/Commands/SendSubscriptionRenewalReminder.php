<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionRenewalReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:renewal-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a subscription renewal reminder if day_difference is 1';

    /**
     * Execute the console command.
     *
     * @return int
     *
     *
     */

     public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $today = now()->toDateString();

        // Fetch users with subscriptions about to expire in 1 day
        $subscriptions = DB::table('payments')
            ->join('ttbkey', 'payments.product_id', '=', 'ttbkey.product_id')
            ->join('usersall', 'usersall.id', '=', 'payments.user_id')
            ->select('payments.user_id', 'payments.product_id', 'usersall.email', 'ttbkey.key_activation_date', 'ttbkey.key_expirey_date',
                DB::raw('DATEDIFF(ttbkey.key_expirey_date, CURDATE()) AS day_difference'))
            ->where('ttbkey.is_key_used', 1)
            ->where(DB::raw('DATEDIFF(ttbkey.key_expirey_date, CURDATE())'), 1)
            ->get();

        foreach ($subscriptions as $subscription) {
            // Send an email or notification
            Mail::raw("Your subscription is about to expire soon.", function ($message) use ($subscription) {
                $message->to($subscription->email)
                        ->subject('Subscription Renewal Reminder');
            });

            $this->info("Renewal reminder sent to {$subscription->email}");
        }

        return 0;
    }
}
