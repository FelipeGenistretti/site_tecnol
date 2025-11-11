<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CanalDenunciaMail extends Mailable
{
    use Queueable, SerializesModels;

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
        $attachments = [];

        foreach ($this->arquivos as $arquivo) {

            $fullPath = storage_path('app/public/' . $arquivo['path']);

            if (file_exists($fullPath)) {

                $attachments[] = Attachment::fromPath($fullPath)
                    ->as($arquivo['nome'] . '.' . strtolower($arquivo['extensao'])); // ← Mantém extensão
            }
        }

        return $attachments;
    }
}
