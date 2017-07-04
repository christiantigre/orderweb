<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
        'country' => 'required',
        'iso' => 'required|max:3',
        ];
    }

    public function messages()
    {
        return [
        'country.required' => 'El campo es obligatorio.',
        'country.unique' => 'El estado ya esta ingresado.',
        'country.max' => 'Capacidad del campo excedida',
        'iso.required' => 'El campo es obligatorio.',
        'iso.unique' => 'El estado ya esta ingresado.',
        'iso.max' => 'Capacidad del campo excedida',
        ];
    }
}
