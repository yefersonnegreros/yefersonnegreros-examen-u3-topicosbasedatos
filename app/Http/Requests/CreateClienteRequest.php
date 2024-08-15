<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
            'nombres' => 'required|max:100',
            'email' => 'required|email|max:255|unique:clientes,email',
            'direccion' => 'required|max:255',
            'fono' => 'required|digits:9|numeric',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'nombres.required' => 'El nombre es obligatorio.',
            'nombres.max' => 'El nombre no puede tener más de 100 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El email no puede tener más de 255 caracteres.',
            'email.unique' => 'El email ya está en uso.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.max' => 'La dirección no puede tener más de 255 caracteres.',
            'fono.required' => 'El número de teléfono es obligatorio.',
            'fono.digits' => 'El número de teléfono debe tener exactamente 9 dígitos.',
            'fono.numeric' => 'El número de teléfono debe ser numérico.',
        ];
    }
}
