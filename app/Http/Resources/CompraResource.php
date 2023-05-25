<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
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
            'Compras' => DetallesCompraCollection(DetallesCompra::
                where('idCompra', $request->id)),
            'Observaciones' => $request->Observaciones,
            'Email' => $request->emailCliente,
            'FechaCompra' => $request->fecha,
        ];
    }
}
