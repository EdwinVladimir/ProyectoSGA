<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocenteResource extends JsonResource
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
            'nom_doc' => $this->nom_doc,
            'ape_doc' => $this->ape_doc,
            'prom_doc' => $this->prom_doc,
            'esp_doc' => $this->esp_doc,
            'lnac_doc' => $this->lnac_doc
        ];
    }
}
