<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Payment1;
use App\Models\Users;
use App\Models\TTBKEY;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SavePaymentDetails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $paymentData;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $paymentData)
    {
        $this->paymentData = $paymentData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $payment = Payment1::create($this->paymentData);
        $paymentId = $payment->id;

        DB::table('ttb_key_assign')->insert([
            'payment_id' => $paymentId,
            'main_key' => 'your_main_key_value',
            'mail_send_status' => 'pending',      
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
