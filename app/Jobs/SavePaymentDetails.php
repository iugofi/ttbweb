<?php

namespace App\Jobs;

use App\Mail\ActivationKeySend;
use App\Mail\FailKeySendMail;
use Illuminate\Bus\Queueable;
use App\Models\Payment1;
use App\Models\Users;
use App\Models\TTBKEY;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SavePaymentDetails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $paymentData;

    /**
     * Create a new job instance.
     *
     * @param array $paymentData
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
        try {
            $payment = Payment1::create($this->paymentData);
            $paymentId = $payment->id;
            $paymentEmail = $payment->email;

            $getkey = TTBKEY::where('product_id', $this->paymentData['product_id'])
                ->where('is_key_used', 0)
                ->orderBy('created_at', 'ASC')
                ->limit(1)
                ->first();

            dd($getkey);

            if ($getkey) {
                $getkey->is_key_used = 1;
                $getkey->key_activation_date = now();

                $plan_id_get = DB::table('product_details')
                    ->select('plan_id')
                    ->where('id', $this->paymentData['product_id'])
                    ->first();

                if (isset($plan_id_get->plan_id)) {
                    switch ($plan_id_get->plan_id) {
                        case 601:
                            $getkey->key_expirey_date = now()->addMonths(1);
                            break;
                        case 602:
                            $getkey->key_expirey_date = now()->addYear();
                            break;
                        case 603:
                        case 604:
                        case 605:
                            $getkey->key_expirey_date = now()->addYear();
                            break;
                        default:
                            $getkey->key_expirey_date = now();
                            break;
                    }
                    $getkey->save();
                }

                $ttb_key_assignId = DB::table('ttb_key_assign')->insertGetId([
                    'payment_id' => $paymentId,
                    'main_key' => $getkey->id,
                    'mail_send_status' => 'SUCCESS',
                    'is_manual' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                Mail::to($paymentEmail)->send(new ActivationKeySend($ttb_key_assignId));

            } else {
                Mail::to('kunal.iugofi@gmail.com')->send(new FailKeySendMail($paymentId));
            }

        } catch (\Exception $e) {
            // Handle the exception (log it, notify someone, etc.)
            Log::error('Payment details job failed: ' . $e->getMessage());
        }
    }
}
