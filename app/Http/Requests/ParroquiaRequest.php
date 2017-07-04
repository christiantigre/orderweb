<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParroquiaRequest extends FormRequest
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
        'parroquia' => 'required|unique:parroquias|max:35',
        'postal' => 'max:15',
        'id_canton' => 'required',
        ];
    }

    public function messages()
    {
        return [
        'parroquia.required' => 'La parroquia es obligatoria.',
        'parroquia.unique' => 'La parroquia ya esta ingresada.',
        'postal.max:15' => 'El codigo postal ha exedido su limite.',
        'id_canton.required' => 'El Canton es obligatorio',
        ];
    }
}
