<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitacaoTitularRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "solicitacao"=>["required"],
            "classificacao"=>["required"],
            'nome'           => ['required', 'string', 'max:255'],
            'cpf'            => ['required', 'digits:11'], 
            'email'          => ['required', 'email', 'max:255'],
            'telefone'       => ['required', 'regex:/^\(?\d{2}\)?\s?\d{4,5}\-?\d{4}$/'],
            'observacoes' => ["required", "string", "max:8000"],
            "arquivos" => ["required"],
            "arquivos.*" => ["file", "mimes:png,jpg,jpeg,webp,pdf,doc,docx,xls,xlsx", "max:5120"],
            "privacy" => ["accepted"]
        ];
    }

    public function messages(): array
{
    return [
        'solicitacao.required' => 'O campo Solicitação é obrigatório.',
        'classificacao.required' => 'O campo Classificação é obrigatório.',

        'nome.required' => 'O nome é obrigatório.',
        'nome.string' => 'O nome deve ser um texto válido.',
        'nome.max' => 'O nome não pode ultrapassar 255 caracteres.',

        'cpf.required' => 'O CPF é obrigatório.',
        'cpf.digits' => 'O CPF deve conter exatamente 11 dígitos.',

        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'Informe um endereço de e-mail válido.',
        'email.max' => 'O e-mail não pode ultrapassar 255 caracteres.',

        'telefone.required' => 'O telefone é obrigatório.',
        'telefone.regex' => 'Informe um número de telefone válido.',

        'observacoes.required' => 'O campo Observações é obrigatório.',
        'observacoes.string' => 'As observações devem ser um texto.',
        'observacoes.max' => 'O limite de caracteres para observações é de 8000.',

        "privacy.accepted"=>"Você deve aceitar a política de privacidade.",

        "arquivos.*.file" => "O envio deve ser um arquivo válido.",
        "arquivos.required"=> "É obrigatório enviar ao menos um arquivo.",
        "arquivos.*.max"=> "Cada arquivo deve ter no máximo 5MB.",
        "arquivos.*.mimes"=> "Algum arquivo enviado não é válido.",
    ];
}

}
