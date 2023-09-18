<?php

namespace App\Mail;

use App\Models\Owner;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ToOwners extends Mailable
{
    use Queueable, SerializesModels;
    private $owners;
    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        $this->owners = Owner::all();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // $owners = Owner::all();
        return new Envelope(
            subject: 'To Owners',
            to: $this->owners->pluck('email')->toArray()
            // to: 'nsm4456@gmail.com'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.owner'
            // with: compact('owners')
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
