<?php

namespace App\Mail;

use App\HasAttachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CanalDenunciaMail extends Mailable
{
    use Queueable, SerializesModels, HasAttachment;

    public $data;
    public $arquivo;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $arquivo=null)
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
            subject: 'Canal Denuncia Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.denuncia',
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
         return $this->attachFile($this->arquivo);
    }
}
