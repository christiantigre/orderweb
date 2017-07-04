<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CantonRequest extends FormRequest
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
        'canton' => 'required|unique:cantons|max:35',
        'postal' => 'max:15',
        'id_province' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'canton.required' => 'El canton es obligatorio.',
        'canton.unique' => 'La canton ya esta ingresado.',
        'postal.max:15' => 'El codigo postal ha exedido su limite.',
        'id_province.required' => 'La provincia es obligatorio',
        ];
    }
}
