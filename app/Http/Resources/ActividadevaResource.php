<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\This;

class ActividadevaResource extends JsonResource
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
        'tipo_eva' => $this->tipo_eva,
        'nota_eva' => $this->nota_eva,
        'peso_eva' => $this->peso_eva,
        'nopond_eva' => $this->opond_eva
        ];
    }
}
