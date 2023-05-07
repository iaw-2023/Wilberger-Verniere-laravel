<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetallesCompraResource extends JsonResource
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
            'Nro° Tickets' => $this->cantidadTickets,
            'Funcion' => $this->idFuncion,
            'Compra' => $this->idCompra,
            'Creado' => $this->created_at,
            'Ultima modificacion'=> $this->updated_at,
        ];
    }
}
