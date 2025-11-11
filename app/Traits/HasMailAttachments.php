<?php

namespace App\Traits;

use Illuminate\Mail\Mailables\Attachment;

trait HasMailAttachments
{
    /**
     * Converte um array de arquivos em attachments do Mail.
     *
     * @param array $arquivos
     * @return Attachment[]
     */
    public function attachmentsFromArray(array $arquivos): array
    {
        $attachments = [];

        foreach ($arquivos as $arquivo) {
            $fullPath = storage_path('app/public/' . $arquivo['path']);

            if (file_exists($fullPath)) {
                $attachments[] = Attachment::fromPath($fullPath)
                    ->as($arquivo['nome'] . '.' . strtolower($arquivo['extensao']));
            }
        }

        return $attachments;
    }
}
