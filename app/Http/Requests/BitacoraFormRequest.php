<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BitacoraFormRequest extends FormRequest
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
            'tituloBitacora'=>'required|max:45',
            'descripcionBitacora'=>'required|max:500',
            'idEmergencia'=>'required',
            'idPersona'=>'required'
        ];
    }
}
