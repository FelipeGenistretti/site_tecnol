<?php

namespace App\Traits;

use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Facades\Storage;

trait HasAttachment
{
    public function attachFileFromPath(string $path): Attachment
    {
        // Usa o próprio Storage para resolver o caminho correto
        $filePath = Storage::disk("public")->path($path);

        return Attachment::fromPath($filePath)
            ->as(basename($path));
    }
}
