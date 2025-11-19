<?php

namespace App\Mail;

use App\Traits\HasMailAttachments;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class TrabalheConoscoMail extends Mailable
{
    use Queueable, SerializesModels, HasMailAttachments;

    public $data;
    public $arquivo;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $arquivo)
    {
        $this->data = $data;
        $this->arquivo = $arquivo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Trabalhe Conosco Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.trabalhe-conosco',
            with:[
                "data"=>$this->data,
                "arquivo"=>$this->arquivo
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

            if ($this->arquivo) {
            return [
                Attachment::fromPath($this->arquivo->getRealPath())
                    ->as($this->arquivo->getClientOriginalName())
                    ->withMime($this->arquivo->getMimeType())
            ];
        }

        return [];

        // return [
        //     Attachment::fromPath($this->arquivo)
        //     ->as('curriculo.' . pathinfo($this->arquivo, PATHINFO_EXTENSION))
        //     ->withMime(mime_content_type($this->arquivo)),
        // ];
    }
}
