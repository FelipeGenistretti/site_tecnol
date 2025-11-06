<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitacaoTitularRequest;
use App\Mail\SolicitacaoTitularMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SolicitacaoTitularController extends Controller
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
    public function solicitacaoTitular(SolicitacaoTitularRequest $request)
    {
        $data = $request->validated();
        $arquivo = $request->file("files");

        Mail::to(config("mail.to.address"))->send(new SolicitacaoTitularMail($data, $arquivo));

        return back()->with("success", "Mensagem enviada com sucesso");
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
