<?php

namespace App;

use Illuminate\Mail\Mailables\Attachment;

trait HasAttachment
{
    /**
     * Retorna um array de anexos para o Mailable.
     *
     * @param  mixed $arquivo
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachFile($arquivo): array
    {
        if ($arquivo) {
            return [
                Attachment::fromPath($arquivo->getRealPath())
                    ->as($arquivo->getClientOriginalName())
                    ->withMime($arquivo->getMimeType())
            ];
        }

        return [];
    }
}
