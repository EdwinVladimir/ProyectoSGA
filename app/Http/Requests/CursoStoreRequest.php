<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoStoreRequest extends FormRequest
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
            'cod_cur' => 'required',
            'nom_cur' => 'required',
            'eje_cur' => 'required',
            'tipo_cur' => 'required', 
            'narea_cur' => 'required',
            'finic_cur' => 'required',
            'ffin_cur' =>'required',
            'nhor_cur' => 'required',
        ];
    }
}
