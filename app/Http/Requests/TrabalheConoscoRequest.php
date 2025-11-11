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
            "arquivos"     => ["required"],
            "arquivos.*"   => ["file", "mimes:png,jpg,jpeg,webp,pdf,doc,docx,xls,xlsx", "max:5120"],

            "nome"         => ["required", "string", "min:3", "max:120"],
            "email"        => ["required", "email"],
            "telefone"     => ["nullable", "string", "max:30"],
            "atuacao"      => ["nullable", "string", "max:120"],
            "mensagem"     => ["nullable", "string", "max:1000"],
        ];
    }

    public function messages(): array
    {
        return [
            "arquivos.required" => "Envie pelo menos um arquivo para prosseguir.",
            "arquivos.*.file"   => "O item enviado deve ser um arquivo válido.",
            "arquivos.*.mimes"  => "O arquivo deve estar em um dos formatos: png, jpg, jpeg, webp, pdf, doc, docx, xls ou xlsx.",
            "arquivos.*.max"    => "Cada arquivo pode ter no máximo 5MB.",

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
