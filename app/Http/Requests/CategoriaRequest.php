<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriaRequest extends FormRequest
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
            'nombre' => ['required', 'min:3', 'max:30', Rule::unique('categorias', 'nombre')->ignore($this->route('categoria'))],
            'descripcion' => ['required', 'min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'No puede quedar vacío el nombre',
            'nombre.unique' => 'El nombre de esta categoría ya está registrado',
            'nombre.min' => 'El nombre debe tener mínimo 3 caracteres',
            'nombre.max' => 'El nombre debe tener máximo 30 caracteres',
            'descripcion.required' => 'No puede quedar vacía la descripción',
            'descripcion.min' => 'La descripción debe tener mínimo 10 caracteres',
        ];
    }
}
