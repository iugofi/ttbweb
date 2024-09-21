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
        $this->keyData = DB::table('ttb_key_assign as tka')
            ->leftJoin('payments1 as p', 'p.id', '=', 'tka.payment_id')
            ->leftJoin('ttbkey as tk', 'tk.id', '=', 'tka.main_key')
            ->select('tka.*', 'p.*', 'tk.*')
            ->where('tka.id', $this->keyAssignId)
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
            view: 'Mail.ActivationKeySend', with: [
                'keyAssignId' => $this->keyAssignId,
                'keyData' => $this->keyData, 
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
