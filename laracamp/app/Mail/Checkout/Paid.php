<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Paid extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;

    /**
     * Create a new message instance.
     */
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Build the message.
     * 
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Transaction Has Been Confirmed')->markdown('emails.checkout.paid', [
            'checkout' => $this->checkout,
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Paid',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.checkout.paid',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
