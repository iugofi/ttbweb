<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionRenewalReminder;

class SendRenewalReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:renewal-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send subscription renewal reminders';

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
        \Log::info('SubscriptionRenewalReminder command started');



        $today = now()->toDateString();

        // Query to find users with subscription renewals in 1 day
        $subscriptions = DB::table('payments')
            ->join('ttbkey', 'payments.product_id', '=', 'ttbkey.product_id')
            ->join('usersall', 'usersall.id', '=', 'payments.user_id')
            ->select('payments.user_id', 'payments.product_id', 'usersall.email', 'ttbkey.key_activation_date', 'ttbkey.key_expirey_date')
            ->where('ttbkey.is_key_used', 1)
            ->whereRaw('DATEDIFF(ttbkey.key_expirey_date, CURDATE()) = 1')
            ->get();

        foreach ($subscriptions as $subscription) {
            // Send email to the user
            Mail::to($subscription->email)->send(new SubscriptionRenewalReminder($subscription));
        }

        \Log::info('SubscriptionRenewalReminder command completed');

        $this->info('Subscription renewal reminders sent successfully.');
    }
}
