<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;


    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Message Mail',
        );
    }


    public function build()
    {
        return $this->subject('New Contact Message: ' . $this->data['subject'])
            ->replyTo($this->data['email'])
            ->view('emails.contact')
            ->with('data', $this->data);
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
