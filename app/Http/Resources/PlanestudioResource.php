<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanestudioResource extends JsonResource
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
        'tit_pla' => $this->tit_pla,
        'descrip_pla' => $this->descrip_pla,
        'cod_cur' => $this->cod_cur,
        'cod_mat' => $this->cod_mat,
        'archi_pla' => $this->archi_pla
        ];
    }
}
