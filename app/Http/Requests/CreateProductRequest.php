<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|numeric|max:999|min:1',
            'codigo' => 'required|numeric|min:1|max:99999',
            'nombre' => 'required|string|max:200|min:1',
            'categoria' => 'required|string|max:200|min:1',
            'descripcion' => 'nullable|string|max:400|min:1',
            'cantidad' => 'required|numeric|max:1000|min:1',
            'precio' => 'required|numeric|min:1|max:10000000',
        ];
    }
}
