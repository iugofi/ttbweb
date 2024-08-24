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
    // Fetch users with day_difference = 1, 2, or 3
    $reminders = DB::table('payments')
        ->join('ttbkey', 'payments.product_key', '=', 'ttbkey.id')
        ->join('usersall', 'usersall.id', '=', 'payments.user_id')
        ->select(
            'payments.user_id',
            'payments.product_id',
            'usersall.lastname',
            'usersall.firstname',
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
        try {
            // Send email (you need to implement the mailable)
            Mail::to($reminder->email)->send(new \App\Mail\SubscriptionRenewalReminder($reminder));

            // Log the reminder in the database if the email is successfully sent
            DB::table('reminder_logs')->insert([
                'user_id' => $reminder->user_id,
                'product_id' => $reminder->product_id,
                'email' => $reminder->email,
                'sent_at' => now(),
                'status' => 'sent'
            ]);

        } catch (\Exception $e) {
            // Log the failure in the database
            DB::table('reminder_logs')->insert([
                'user_id' => $reminder->user_id,
                'product_id' => $reminder->product_id,
                'email' => $reminder->email,
                'sent_at' => now(),
                'status' => 'failed',
                'error_message' => $e->getMessage()
            ]);

            // Optionally, you can log the error message to the log file
            \Log::error('Failed to send renewal reminder: ' . $e->getMessage());
        }
    }

    $this->info('Renewal reminders sent successfully!');
    \Log::info('every minute cron job testing');
}

}
