<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadPdf extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function downloadPdf($nome)
    {
         $filePath = "public/pdfs/{$nome}";

        if (!Storage::exists($filePath)) {
            abort(404, 'Arquivo não encontrado.');
        }

        return Storage::download($filePath);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
