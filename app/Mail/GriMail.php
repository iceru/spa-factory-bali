<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class GriMail extends Mailable
{
    use Queueable, SerializesModels;
    public $gri;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($gri)
    {
        $this->gri = $gri;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('contact@spafactorybali.biz', 'Spa Factory Bali'),
            subject: 'Spa Factory Bali Web Request GRI Form - ' . $this->gri->name,
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
            view: 'mails.gri',
            with: [
                'name' => $this->gri->name,
                'company' => $this->gri->company,
                'email' => $this->gri->email,
                'job_title' => $this->gri->job_title,
                'usage_for' => $this->gri->usage_for,
            ]
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
