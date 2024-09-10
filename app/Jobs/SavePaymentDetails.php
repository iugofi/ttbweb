<?php

namespace App\Jobs;

use App\Mail\FailKeySendMail;
use Illuminate\Bus\Queueable;
use App\Models\Payment1;
use App\Models\Users;
use App\Models\TTBKEY;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

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

        $getkey = TTBKEY::where('product_id', $this->paymentData['product_id'])
            ->where('is_key_used', 0)
            ->orderBy('created_at', 'ASC')
            ->limit(1)
            ->first();

        if ($getkey) {
            $getkey->is_key_used = 1;
                $getkey->key_activation_date = Carbon::now();

                $plan_id_get = DB::table('product_details')
                    ->select('plan_id')
                    ->where('id', $this->paymentData['product_id'])
                    ->first();

                if (isset($plan_id_get->plan_id)) {
                    switch ($plan_id_get->plan_id) {
                        case 601:
                            $getkey->key_expirey_date = Carbon::now()->addMonths(1);
                            break;
                        case 602:
                            $getkey->key_expirey_date = Carbon::now()->addYear();
                            break;
                        case 603:
                        case 604:
                        case 605:
                            $getkey->key_expirey_date = Carbon::now()->addYear();
                            break;
                        default:
                            $getkey->key_expirey_date = Carbon::now();
                            break;
                    }
                    $getkey->save();
                }

            DB::table('ttb_key_assign')->insert([
                'payment_id' => $paymentId,
                'main_key' => $getkey->id,
                'mail_send_status' => 'pending',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }else
        {
            Mail::to('kunal.iugofi@gmail.com')->send(new FailKeySendMail($paymentId));
        }
    }
}
