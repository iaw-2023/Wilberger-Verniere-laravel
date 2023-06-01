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
            'NroId' => $this->id,
            'NroTickets' => $this->cantidadTickets,
            'idFuncion' => $this->idFuncion,
            //'Funcion' => FuncionResource(Funcion:findorfail($this->idFuncion))??,
            //'Compra' => CompraResource(Compra:findorfail($this->idCompra))??,
        ];
    }
}
