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
    protected $signature = 'send:subscription-renewal-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send subscription renewal reminder to users whose subscription is expiring soon';

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
        $users = DB::table('payments')
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
            ->having('day_difference', 1)
            ->get();

        foreach ($users as $user) {
            Mail::raw('Your subscription is about to expire. Please renew it to continue enjoying our services.', function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Subscription Renewal Reminder');
            });
        }

        $this->info('Subscription renewal reminders sent successfully.');
    }
}
