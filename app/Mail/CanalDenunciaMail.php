<?php

namespace App\Mail;

use App\Traits\HasMailAttachments;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CanalDenunciaMail extends Mailable
{
    use Queueable, SerializesModels, HasMailAttachments;

    public $data;
    public $arquivos;

    public function __construct($data, $arquivos = [])
    {
        $this->data = $data;
        $this->arquivos = $arquivos;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Canal de Denúncia'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.canaldedenuncia',
            with: [
                'data' => $this->data,
                'arquivos' => $this->arquivos,
            ]
        );
    }

    public function attachments(): array
    {
         return $this->attachmentsFromArray($this->arquivos);
    }
}
