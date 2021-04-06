<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocexpproResource extends JsonResource
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
            'carg_docep' => $this->carg_doce,
            'unid_docep' => $this->unid_docep
        ];
    }
}
