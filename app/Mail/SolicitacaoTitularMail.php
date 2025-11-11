<?php

namespace App\Mail;

use App\Traits\HasMailAttachments;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitacaoTitularMail extends Mailable
{
    use Queueable, SerializesModels,HasMailAttachments;

     public $data;
    public $arquivos;

    public function __construct($data, $arquivos = [])
    {
        $this->data = $data;
        $this->arquivos = $arquivos;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitacao Titular Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.solicitacaotitular',
            with: [
                'data' => $this->data,
                'arquivos' => $this->arquivos,
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
         return $this->attachmentsFromArray($this->arquivos); 
    }
}
