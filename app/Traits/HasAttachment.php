<?php

namespace App\Traits;

use Illuminate\Mail\Mailables\Attachment;

trait HasAttachment
{
    public function attachFileFromPath(string $path): array
    {
        $filePath = storage_path("app/public/" . $path);

        return [
            Attachment::fromPath($filePath)
                ->as(basename($path))
        ];
    }
}
