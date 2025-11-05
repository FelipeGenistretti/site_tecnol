<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreRegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // permite que qualquer visitante acesse o pré-cadastro
        return true;
    }

      protected function prepareForValidation()
    {
        $this->merge([
            'cpf'  => preg_replace('/\D/', '', $this->cpf),
            'cnpj' => preg_replace('/\D/', '', $this->cnpj),
        ]);
    }


    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

           if (!env('VALIDATION_ENABLED', true)) {
        return [];
    }
        return [
            'cnpj'           => ['required', 'digits:14'], 
            'nome'           => ['required', 'string', 'max:255'],
            'categoria'      => ['required', 'string', 'in:oficina,lojista,empresa'],
            'nome-fantasia'  => ['required', 'string', 'max:255'],

            'cep'            => ['required', 'digits:8'], 
            'endereco'       => ['required', 'string', 'max:255'],
            'numero'         => ['required', 'string', 'max:20'],
            'complemento'    => ['nullable', 'string', 'max:255'],
            'bairro'         => ['required', 'string', 'max:255'],
            'uf'             => ['required', 'string', 'size:2'],
            'cidade'         => ['required', 'string', 'max:255'],

            'Nome'           => ['required', 'string', 'max:255'],
            'cpf'            => ['required', 'digits:11'], 
            'telefone'       => ['required', 'regex:/^\(?\d{2}\)?\s?\d{4,5}\-?\d{4}$/'], // aceita (00) 00000-0000
            'email'          => ['required', 'email', 'max:255'],

            'privacy'        => ['accepted'],
        ];
    }

    /**
     * Mensagens personalizadas de erro
     */
    public function messages(): array
    {
        return [
            'required'      => 'O campo :attribute é obrigatório.',
            'email'         => 'Informe um e-mail válido.',
            'regex'         => 'O campo :attribute está em um formato inválido.',
            'max'           => 'O campo :attribute deve ter no máximo :max caracteres.',
            'size'          => 'O campo :attribute deve ter exatamente :size caracteres.',
            'in'            => 'O valor selecionado para :attribute é inválido.',
            'accepted'      => 'Você deve aceitar a Política de Privacidade para continuar.',
        ];
    }

    /**
     * Traduz os nomes dos campos para mensagens mais amigáveis
     */
    public function attributes(): array
    {
        return [
            'cnpj'          => 'CNPJ',
            'nome'          => 'razão social',
            'categoria'     => 'categoria',
            'nome-fantasia' => 'nome fantasia',
            'cep'           => 'CEP',
            'endereco'      => 'endereço',
            'numero'        => 'número',
            'complemento'   => 'complemento',
            'bairro'        => 'bairro',
            'uf'            => 'UF',
            'cidade'        => 'cidade',
            'Nome'          => 'nome do responsável',
            'cpf'           => 'CPF',
            'telefone'      => 'telefone',
            'email'         => 'e-mail',
            'privacy'       => 'política de privacidade',
        ];
    }
}
