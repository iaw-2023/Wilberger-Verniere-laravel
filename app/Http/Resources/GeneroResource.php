<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use App\Models\Pelicula;
use App\Http\Controllers\PeliculaController;

class GeneroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nombre' => $this->nombre,
            'Peliculas' => PeliculaController::listaPeliculas($this->id),
        ];
    }
}
