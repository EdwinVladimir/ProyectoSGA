<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocinfperStoreRequest extends FormRequest
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
            'dni_doc' => 'required',
            'gra_docip' => 'required',
            'prom_docip' => 'required',
            'gra_docip' => 'required',   
            'esp_adocp' => 'required',
            'lnac_adocp' => 'required',
        ];
    }
}
