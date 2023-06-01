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
            'Pelicula' => $this->idPelicula,
            //'Pelicula' => new PeliculaResource(Pelicula:findorfail($this->idPelicula))??,
            'Sala' => $this->idSala,
            'Fecha' => $this->fecha,
            'Hora' => $this->hora
        ];
    }
}
