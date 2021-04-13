<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HorarioResource extends JsonResource
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
            'cod_per' => $this->cod_per,
            'cod_aul' => $this->cod_aul,
            'cod_cur' => $this->cod_cur,
            'cod_sec' => $this->cod_sec,
            'cod_mat' => $this->cod_mat,
            'dia_hor' => $this->dia_hor,
            'inic_hor' => $this->inic_hor,
            'ter_hor' => $this->ter_hor
        ];
    }
}
