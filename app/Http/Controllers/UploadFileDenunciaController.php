<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFilesRequest;
use App\Mail\CanalDenunciaMail;
use App\Services\ArquivoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UploadFileDenunciaController extends Controller
{
    
        protected ArquivoService $arquivoService;

        public function __construct(ArquivoService $arquivoService)
        {
            $this->arquivoService = $arquivoService;
        }

        public function uploadFile(UploadFilesRequest $request)
        {
            $data = $request->validated();

            $arquivos = [];
            if ($request->hasFile('arquivos')) {
                $arquivos = $this->arquivoService->processar($request->file('arquivos'));
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
