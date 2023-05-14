<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FuncionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'NroId' => $this->id,
            'idPelicula' => $this->idPelicula,
            'Fecha' => $this->fecha,
            'Hora' => $this->hora,
            'Sala' => $this->idSala,
            'Habilitado' => $this->habilitado,
            'Creado' => $this->created_at,
            'Ultima modificacion'=> $this->updated_at,
        ];
    }
}
