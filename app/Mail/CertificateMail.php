<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Headers;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $user;
    public $course;
    public $certificateUrl;

    public function __construct($user, $course, $certificateUrl)
    {
        $this->user = $user;
        $this->course = $course;
        $this->certificateUrl = $certificateUrl;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('markthavalor@gmail.com', 'Mark Thavalor'),
            subject: 'Protokos Medical Certificate',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.certificate',
    //     );
    // }


    public function build()
    {
        // Generate PDF
        $pdf = Pdf::loadView('emails.certificate', ['user' => $this->user, 'course' => $this->course]);
        $pdfPath = storage_path('app/public/certificates/' . $this->user->id . '_certificate.pdf');

        // Save the PDF file
        file_put_contents($pdfPath, $pdf->output());

        return $this->subject('Your Course Certificate')
            ->view('emails.certificate')
            ->attach($pdfPath, [
                'as' => 'certificate.pdf',
                'mime' => 'application/pdf',
            ])
            ->with([
                'user' => $this->user,
                'course' => $this->course,
            ]);
    }

    public function headers(): Headers
    {
        return new Headers(
            messageId: 'markthavalor@gmail.com',
            references: ['markthavalor@example.com'],

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
