<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CnpjController extends Controller
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
    public function consultaCnpj($cnpj)
    {
        $cnpj = preg_replace('/\D/', '', $cnpj);

        $response = Http::get("https://receitaws.com.br/v1/cnpj/{$cnpj}");

        if (!$response->successful() || $response['status'] === 'ERROR') {
            return response()->json(['error' => 'CNPJ inválido ou limite excedido'], 400);
        }

        $data = $response->json();

        $nomeCompleto = $data['nome'] ?? '';

        if (strlen($nomeCompleto) >= 11) {
            $cpf = substr($nomeCompleto, -11);
            $nome = trim(substr($nomeCompleto, 0, -11));
        } else {
            $cpf = '';
            $nome = $nomeCompleto;
        }

        return [
            ...$data,
            'nome_limpo' => ucwords(strtolower($nome)),
            'cpf_extraido' => $cpf,
        ];
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
