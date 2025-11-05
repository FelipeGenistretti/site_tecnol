<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnviarCurriculoRequest extends FormRequest
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
            "nome"=>["required", "string"],
            "email"=>["required", "string", "email"],
            "telefone"=>["required", "string"],
            "atuacao" =>["required"],
            "menssagem"=>["required", "string"],
            "files"=>["required", "file","mimes:jpg,jpeg,png,webp,gif" ,"max:5120"],
            "privacy"=> ['accepted']

        ];
    }

    public function messages():array
    {
        return ["nome.required" => "O nome é obrigatório.",
                "email.required"=> "O email é obrigatório.",
                "email.email" => "Email inválido.",
                "telefone.required"=> "O telefone é obrigatório.",
                "files.required"=> "O arquivo é obrigatório",
                "files.max"=>"O arquivo deve ter no máximo 5MB",
                "files.mimes"=>"O arquivo deve ser uma imagem",
                "privacy.accepted" => "Você deve aceitar a política de privacidade."
    ];
        
    }
}
