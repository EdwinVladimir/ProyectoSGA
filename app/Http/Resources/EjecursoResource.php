<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EjecursoResource extends JsonResource
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
            'nom_ejecurso' => $this->nom_ejecurso,
            'desc_ejecurso' => $this->desc_ejecurso
        ];
    }
}
