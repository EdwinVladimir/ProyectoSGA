<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocinfperResource extends JsonResource
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
            'gra_docip' => $this->gra_docip,
            'prom_docip' => $this->prom_docip,
            'gra_docip' => $this->gra_docip,   
            'esp_adocp' => $this->esp_adocp,
            'lnac_adocp' => $this->lnac_adocp
        ];
    }
}
