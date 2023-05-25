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
            'NroId' => $request->id,
            'idPelicula' => $request->idPelicula,
            'Fecha' => $request->fecha,
            'Hora' => $request->hora,
            'Sala' => $request->idSala,
        ];
    }
}
