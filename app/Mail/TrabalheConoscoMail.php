<?php

namespace App\Mail;

use App\Traits\HasAttachment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;


class TrabalheConoscoMail extends Mailable
{
    use Queueable, HasAttachment;

    public $data;
    public $path;

    public $arquivo_nome;
    public $arquivo_tamanho;
    public $arquivo_url;

    public function __construct($data, $path)
    {
        $this->data = $data;
        $this->path = $path;

        $this->arquivo_nome = basename($path);
        $this->arquivo_tamanho = round(Storage::disk("public")->size($path) / 1024, 1);

        
        $this->arquivo_url = route("download.arquivo", ["path" => $this->path]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo Currículo Recebido'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.trabalhe-conosco',
            with: [
                "data" => $this->data,
                "arquivo_nome" => $this->arquivo_nome,
                "arquivo_tamanho" => $this->arquivo_tamanho,
                "arquivo_url" => $this->arquivo_url,
            ]
        );
    }

    public function attachments(): array
{
    return [
        $this->attachFileFromPath($this->path)
    ];
}

}
