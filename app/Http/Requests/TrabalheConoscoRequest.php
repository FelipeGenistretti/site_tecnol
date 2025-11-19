<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabalheConoscoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "arquivo"     => ["required", "file", "mimes:pdf,doc,docx,png,jpg,jpeg,webp,xls,xlsx", "max:5120"],
            "privacy"     => ["accepted"],  
            "nome"        => ["required", "string", "min:3", "max:120"],
            "email"       => ["required", "email"],
            "telefone"    => ["required", "string", "max:30"],
            "atuacao"     => ["required", "string", "max:120"],
            "mensagem"    => ["required", "string", "max:1000"],
        ];
    }

    public function messages(): array
    {
        return [
            "arquivo.required" => "Envie um arquivo para prosseguir.",
            "arquivo.file"     => "O item enviado deve ser um arquivo válido.",
            "arquivo.mimes"    => "O arquivo deve estar em um dos formatos: png, jpg, jpeg, webp, pdf, doc, docx, xls ou xlsx.",
            "arquivo.max"      => "O arquivo pode ter no máximo 5MB.",

            "nome.required"     => "O campo nome é obrigatório.",
            "nome.min"          => "O nome deve ter no mínimo :min caracteres.",
            "nome.max"          => "O nome pode ter no máximo :max caracteres.",

            "email.required"    => "O campo e-mail é obrigatório.",
            "email.email"       => "Informe um endereço de e-mail válido.",

            "telefone.max"      => "O telefone pode conter no máximo :max caracteres.",

            "atuacao.max"       => "A área de atuação pode ter no máximo :max caracteres.",

            "mensagem.max"      => "A mensagem pode ter no máximo :max caracteres.",
        ];
    }
}
