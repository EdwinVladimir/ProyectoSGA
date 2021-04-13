<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
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
        'dni_al' => $this->dni_al,
        'nom_al' => $this->nom_al,
        'ape_al' => $this->ape_al,
        'rep_al' => $this->rep_al,
        'esp_al' => $this->esp_al,
        'lnac_al' => $this->lnac_al 
        ];
    }


}
