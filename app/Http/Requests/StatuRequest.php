<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatuRequest extends FormRequest
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
        'statu' => 'required',
        ];
    }


    public function messages()
    {
        return [
        'statu.required' => 'El campo es obligatorio.',
        'statu.unique' => 'El estado ya esta ingresado.',
        'statu.max' => 'Capacidad del campo excedida',
        ];
    }
}
