<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TiposangreResource extends JsonResource
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
            'nom_sangre' => $this->nom_curso,
            'desc_sangre' => $this->desc_curso
        ];
    }
}
