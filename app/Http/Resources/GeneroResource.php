<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

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
            'Nro° Id' => $this->id,
            'Nombre' => $this->nombre,
            'Habilitado' => $this->habilitado,
            'Peliculas' => PeliculaCollection::collection(DB::pelicula
                ->where('idGenero','$this->id')
                ->where('habilitado',true)
            ),
            'Creado' => $this->created_at,
            'Ultima modificacion'=> $this->updated_at,
        ];
    }
}
