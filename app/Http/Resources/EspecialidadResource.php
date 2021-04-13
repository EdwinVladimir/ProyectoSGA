<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EspecialidadResource extends JsonResource
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
            'nom_especialidad' => $this->nom_especialidad,
            'desc_especialidad' => $this->desc_especialidad
        ];
    }
}
