<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Permite qualquer usuário enviar o formulário
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:2", "max:255"],
            "email" => ["required", "email", "max:255"],
            "phone" => ["nullable", "string", "min:10", "max:15"],
            "message" => ["required", "string", "min:10", "max:300"],
            "privacy" => ["accepted"],
        ];
    }

    /**
     * Mensagens de erro customizadas (opcional)
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O nome deve ter pelo menos 2 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'message.required' => 'O campo mensagem é obrigatório.',
            'message.min' => 'A mensagem deve ter pelo menos 10 caracteres.',
            'privacy.accepted' => 'Você deve aceitar a política de privacidade.',
        ];
    }
}
