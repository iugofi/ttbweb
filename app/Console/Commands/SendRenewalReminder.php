<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Log;

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
        //Fetch users with day_difference = 1
        $reminders = DB::table('payments')
            ->join('ttbkey', 'payments.product_id', '=', 'ttbkey.product_id')
            ->join('usersall', 'usersall.id', '=', 'payments.user_id')
            ->select(
                'payments.user_id',
                'payments.product_id',
                'usersall.email',
                'ttbkey.key_activation_date',
                'ttbkey.key_expirey_date',
                DB::raw('DATEDIFF(ttbkey.key_expirey_date, CURDATE()) AS day_difference')
            )
            ->where('ttbkey.is_key_used', 1)
            ->whereIn(DB::raw('DATEDIFF(ttbkey.key_expirey_date, CURDATE())'), [1, 2, 3])
            ->where(DB::raw('DATEDIFF(ttbkey.key_expirey_date, CURDATE())'), '>', 0)
            ->get();


        foreach ($reminders as $reminder) {
            // Send email (you need to implement the mailable)
            Mail::to($reminder->email)->send(new \App\Mail\SubscriptionRenewalReminder($reminder));
        }

        $this->info('Renewal reminders sent successfully!');
        \Log::info('every minute corn job testing');
    }
}
