<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BotonFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombreBoton'=>'required|max:45',
            'descripcionBoton'=>'required|max:200'
        ];
    }
}
