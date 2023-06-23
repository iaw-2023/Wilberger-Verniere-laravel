<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\FuncionController;
use App\Http\Resources\FuncionResource;
use App\Models\Funcion;

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
            'NroTickets' => $this->cantidadTickets,
            'Funcion' => new FuncionResource($this->funcion),
            'Compra' => $this->idCompra
        ];
    }
}
