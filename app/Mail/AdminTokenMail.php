<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminTokenMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $adminName;
    /**
     * Create a new message instance.
     */
    public function __construct($token, $adminName)
    {
        $this->token = $token;
        $this->adminName = $adminName;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Protokos Admin Login Token',
        );
    }


    public function build()
    {
        return $this->subject('Your Admin Login Token')
            ->view('emails.admin_token')
            ->with([
                'token' => $this->token,
                'adminName' => $this->adminName,
            ]);
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
