<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceRequest extends FormRequest
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
        'province' => 'required',
        'province' => 'unique:provinces',
        'postal' => 'unique:provinces|max:15',
        'id_country' => 'required',
        ];
    }

    public function messages()
    {
        return [
        'province.required' => 'El pais es obligatorio.',
        'province.unique' => 'La provincia ya esta ingresada.',
        'postal.unique' => 'El codigo postal ya esta ingresado.',
        'id_country.required' => 'El pais es obligatorio',
        ];
    }
}
