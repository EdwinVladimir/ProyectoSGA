<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioStoreRequest extends FormRequest
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
            'dni_al' => 'required',
            'dni_doc' => 'required',
            'cod_per' => 'required',
            'cod_aul' => 'required',
            'cod_cur' => 'required',
            'cod_sec' => 'required',
            'cod_mat' => 'required',
            'dia_hor' => 'required',
            'inic_hor' => 'required',
            'ter_hor' => 'required',
        ];
    }
}
