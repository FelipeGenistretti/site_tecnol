<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreRegistroRequest;
use App\Mail\PreCadastroMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PreRegistroController extends Controller
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
    public function store(PreRegistroRequest $request)
    {
        $data = $request->validated();

        Mail::to(config("mail.to.address"))->send(new PreCadastroMail($data));

        return redirect()->back()->with('success', "Mensagem enviada com sucesso");
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
