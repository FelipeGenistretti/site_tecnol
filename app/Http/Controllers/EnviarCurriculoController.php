<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnviarCurriculoRequest;
use App\Mail\CurriculoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarCurriculoController extends Controller
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
    public function enviarCurriculo(EnviarCurriculoRequest $request)
    {
        $data = $request->validated();
        $arquivo = $request->file("files");

        Mail::to(config('mail.to.address'))->send(new CurriculoMail($data, $arquivo));
        

        return back()->with("success", "Currículo enviado com sucesso");
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
