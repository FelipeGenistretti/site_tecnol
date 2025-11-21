<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
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
                "arquivos" => ["required"],
                "arquivos.*" => ["file", "mimes:png,jpg,jpeg,webp,pdf,doc,docx,xls,xlsx", "max:5120"],
                "g-recaptcha-response" => ["required", new Recaptcha()],
                


                'privacy'=> ['accepted'],
                'mensagem'=>['required', 'string', 'max:2000']
            ];
        }


        public function messages(): array
        {
            return [
                "arquivos.required"=> "É obrigatório enviar ao menos um arquivo.",
                "arquivos.*.max"=> "Cada arquivo deve ter no máximo 5MB.",
                "arquivos.*.mimes"=> "Algum arquivo enviado não é válido.",

                "privacy.accepted"=>"Você deve aceitar a política de privacidade.",
                "mensagem.required"=>"Você deve escrever uma mensagem."
            ];
        }

}
