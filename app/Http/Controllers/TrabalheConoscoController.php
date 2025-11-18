<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrabalheConoscoRequest;
use App\Mail\TrabalheConoscoMail;
use App\Services\ArquivoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrabalheConoscoController extends Controller
{
    protected ArquivoService $arquivoService;

    public function __construct(ArquivoService $arquivoService)
    {
        $this->arquivoService = $arquivoService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function handle(TrabalheConoscoRequest $request)
    {
        $data = $request->validated();
        $arquivo = $request->file("arquivos");


            Mail::to(config('mail.to.address'))
                ->send(new TrabalheConoscoMail($data, $arquivo));

            return back()->with("success", "Currículo enviada com sucesso");
        
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
