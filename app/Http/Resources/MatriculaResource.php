<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MatriculaResource extends JsonResource
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
            'dni_doc' => $this->dni_doc,
            'cod_cur' => $this->cod_cur,
            'cod_sec' => $this->cod_sec,
            'cod_mat' => $this->cod_mat
        ];
    }
}
