<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFilesRequest extends FormRequest
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
            "files"=>["required", "file", 'mimes:png,jpg,jpeg,webp,pdf,doc,docx,xls,xlsx',"max:5120"],
            'privacy'=> ['accepted'],
            'message'=>['required', 'string', 'max:255']
        ];
    }

    public function messages() : array
    {
        return [
            "files.required"=> "É obrigatório enviar um arquivo",
            "files.max"=> "O arquivo deve ter no máximo 5MB",
            "files.mimes"=> "Deve ser um arquivo válido",
            "privacy.accepted"=>"Você deve aceitar a política de privacidade.",
            "message.required"=>"Você deve escrever uma mensagem."
        ];
    }
}
