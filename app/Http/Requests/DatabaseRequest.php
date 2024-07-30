<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatabaseRequest extends FormRequest
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
            'databaseSelected' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'databaseSelected.required' => 'Banco de dados não informado!',
            'databaseSelected.string' => 'Nome do banco de dados inválido!',
        ];
    }
}
