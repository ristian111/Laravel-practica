<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductoRequest extends FormRequest
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
            "nombre" => ['required', 'min:3', 'max:50', 'string', Rule::unique('productos', 'nombre')->ignore($this->route('producto'))],
            "precio_venta" => ['required', 'min:0', 'numeric'],
            "precio_compra" => ['required', 'min:0', 'numeric'],
            "unidad_medida" => ['required', 'min:2', 'max:20', 'string'],
            "categoria_id" => ["required"]
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'No puede quedar vacío',
            'nombre.unique' => 'El nombre de este producto ya está registrado',
            'nombre.min' => 'Debe tener mínimo 3 caracteres',
            'nombre.max' => 'Debe tener máximo 50 caracteres',
            'nombre.string' => 'No se permiten números',
            'precio_venta.required' => 'No puede quedar vacío',
            'precio_venta.min' => 'Debe ser mayor a cero',
            'precio_venta.numeric' => 'No se permite texto',
            'precio_compra.required' => 'No puede quedar vacío',
            'precio_compra.min' => 'Debe ser mayor a cero',
            'precio_compra.numeric' => 'No se permite texto',
            'unidad_medida.required' => 'No puede quedar vacío',
            'unidad_medida.min' => 'Debe tener mínimo 2 caracteres',
            'unidad_medida.max' => 'Debe tener máximo 20 caracteres',
            'unidad_medida.string' => 'No se permiten números',
            'categoria_id.required' => 'Debes seleccionar una categoría',
        ];
    }
}
