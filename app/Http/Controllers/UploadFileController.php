<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFilesRequest;
use App\Mail\CanalDenunciaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
        public function uploadFile(UploadFilesRequest $request)
        {
            $data = $request->validated();
            $arquivos = [];

            if ($request->hasFile('arquivos')) {
                foreach ($request->file('arquivos') as $file) {

                    $path = $file->store('canal_denuncia', 'public');

                    $arquivos[] = [
                        'nome' => $file->getClientOriginalName(),
                        'tamanho' => round($file->getSize() / 1024),
                        'extensao' => strtoupper($file->extension()),
                        'file' => basename($path),
                        'url' => asset("storage/{$path}"),
                        'path' => $path
                    ];

                }
            }

            Mail::to(config('mail.to.address'))
                ->send(new CanalDenunciaMail($data, $arquivos));

            return back()->with("success", "Denúncia enviada com sucesso");
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
