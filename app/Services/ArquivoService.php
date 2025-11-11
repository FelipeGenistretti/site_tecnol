<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ArquivoService
{
    /**
     * Faz o upload dos arquivos e retorna os dados prontos para email.
     *
     * @param UploadedFile[] $arquivos
     * @param string $pasta
     * @return array
     */
    public function processar(array $arquivos, string $pasta = 'canal_denuncia'): array
    {
        $resultado = [];

        foreach ($arquivos as $file) {
            $path = $file->store($pasta, 'public');

            $resultado[] = [
                'nome' => $file->getClientOriginalName(),
                'tamanho' => round($file->getSize() / 1024),
                'extensao' => strtoupper($file->extension()),
                'file' => basename($path),
                'url' => asset("storage/{$path}"),
                'path' => $path
            ];
        }

        return $resultado;
    }
}
