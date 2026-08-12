<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:120'],
            'contacto' => ['required', 'string', 'max:160'],
            'interes' => ['required', 'in:inscripcion,informacion,evento'],
            'website' => ['nullable', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Indicá tu nombre completo.',
            'contacto.required' => 'Indicá un correo o WhatsApp.',
            'interes.required' => 'Seleccioná un interés.',
            'interes.in' => 'El interés seleccionado no es válido.',
            'website.max' => 'No se pudo enviar el formulario.',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            redirect()
                ->to(route('index-3') . '#contacto')
                ->withErrors($validator)
                ->withInput()
        );
    }
}
