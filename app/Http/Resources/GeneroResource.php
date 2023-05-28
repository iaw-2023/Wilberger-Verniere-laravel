<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PeliculaCollection;
use App\Models\Pelicula;

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
            'NroId' => $request->id,
            'Nombre' => $request->nombre,
            'Peliculas' => PeliculaCollection::collection(Pelicula::where([
                ['idGenero',$request->id],
                ['habilitado', true]
            ])),
        ];
    }
}
