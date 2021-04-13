<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoccapproResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'dni_doc' => $this->dni_doc,
            'crea_doccp' => $this->crea_doccp,
            'lug_doccp' => $this->lug_doccp,
            'ano_doccp' => $this->ano_doccp
        ];
    }
}
