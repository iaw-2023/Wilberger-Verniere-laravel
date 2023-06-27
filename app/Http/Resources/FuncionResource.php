<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\FuncionController;

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
            'Pelicula' => $this->pelicula->nombre,
            'Fecha' => FuncionController::formatoFecha($this->fecha),
            'Hora' => $this->hora,
            'NroSala' => $this->idSala,
        ];
    }
}
