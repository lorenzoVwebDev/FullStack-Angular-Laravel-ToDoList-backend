<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SignUpVerif extends Mailable
{
    use Queueable, SerializesModels;
    public string $redirectLink;
    public string $username;

    /**
     * Create a new message instance.
     */
    public function __construct(string $redirectLink, string $username)
    {
        $this->redirectLink = $redirectLink;
        $this->username = $username;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        @["address" => $address, "name" => $name] = config("mail.from");
        return new Envelope(
            from: $address,
            subject: 'To Do List Fullstack Sign Up Verification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'signupverification',
            with: [
                'redirectLink' => $this->redirectLink,
                'username' => $this->username
            ]
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
