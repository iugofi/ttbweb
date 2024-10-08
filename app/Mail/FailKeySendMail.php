<?php

namespace App\Mail;

use App\Models\Payment1;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FailKeySendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $paymentId;
    public $paymentDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($paymentId)
    {
        $this->paymentId=$paymentId;
        $this->paymentDetails = Payment1::find($this->paymentId);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Fail Key Send Mail',
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
            view: 'Mail.FailKeySendMail' ,with: [
                'paymentDetails' =>$this->paymentDetails,
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
