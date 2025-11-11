<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitacaoTitularRequest;
use App\Mail\SolicitacaoTitularMail;
use App\Services\ArquivoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SolicitacaoTitularController extends Controller
{

    protected ArquivoService $arquivoService;

    public function __construct(ArquivoService $arquivoService)
    {
        $this->arquivoService = $arquivoService;
    }

    public function solicitacaoTitular(SolicitacaoTitularRequest $request)
    {
        $data = $request->validated();

        $arquivos = [];
        if ($request->hasFile('arquivos')) {
            $arquivos = $this->arquivoService->processar($request->file('arquivos'));
        }

        Mail::to(config('mail.to.address'))
            ->send(new SolicitacaoTitularMail($data, $arquivos));

        return back()->with("success", "Solicitação enviada com sucesso");
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
