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
            'NroId' => $request->id,
            'NroTickets' => $request->cantidadTickets,
            'idFuncion' => $request->idFuncion,
            'idCompra' => $request->idCompra,
        ];
    }
}
