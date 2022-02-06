<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeMembers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;

        //A false no pagina directo rules()
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Reglas de Validacion pre-Insercion de datos 
            'name'=> 'required',
            'Age'=>'required',
            'birthdate'=>'required'
        ];
    }
}
