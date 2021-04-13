<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocfoproResource extends JsonResource
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
            'gra_docfp' => $this->gra_docfp,
            'instt_adocp' => $this->instt_adocp,
            'cobt_docfp' => $this->cobt_docfp
        ];
    }
}
