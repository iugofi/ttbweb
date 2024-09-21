<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ActivationKeySend extends Mailable
{
    use Queueable, SerializesModels;
    protected $keyAssignId;
    protected $keyData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($keyAssignId)
    {
        $this->keyAssignId = $keyAssignId;
        $this->keyData = $data = DB::table('ttb_key_assign AS tka')
        ->leftJoin('payments1 AS p', 'p.id', '=', 'tka.payment_id')
        ->leftJoin('usersall AS us', 'us.id', '=', 'p.user_id')
        ->leftJoin('ttbkey AS tk', 'tk.id', '=', 'tka.main_key')
        ->leftJoin('product_details AS pd', 'pd.id', '=', 'p.product_id')
        ->leftJoin('planname AS pn', 'pn.plan_id', '=', 'pd.plan_id')
        ->leftJoin('storepick AS s', 's.PICK_ID', '=', 'pd.key_type')
        ->select(
            'tka.main_key AS product_key',
            'tk.main_key AS ttb_main_key',
            'tk.key_activation_date AS key_activation_date',
            'tk.key_expirey_date AS key_expirey_date',
            's.PICK_TEXT AS product_name',
            'p.transaction_id AS invoice_id',
            'p.price AS amount_total',
            'p.payment_time',
            'p.order_id AS order_id',
            'p.payment_status AS payment_status',
            'pd.key_type AS key_type',
            'pd.plan_id AS plan_id',
            'p.firstname',
            'p.lastname',
            'pn.name AS plan_name',
            'p.city',
            'p.state AS state',
            'p.country AS country',
            'p.pincode AS pincode',
            'p.payment_method',
            'p.email AS email'
        )
        ->where('tka.id', $this->keyAssignId)
        ->where('s.STORE_ID', 'key_type')
        ->first();

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Activation Key Send',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'Mail.sendkey', with: [
                'keyAssignId' => $this->keyAssignId,
                'paymentDetails' => $this->keyData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
