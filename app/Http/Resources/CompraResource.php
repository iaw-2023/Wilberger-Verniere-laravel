<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\DetallesCompra;

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
            'Observaciones' => $this->observaciones,
            'Email' => $this->emailCliente,
            'FechaCompra' => $this->fecha,
            'Compras' => $this->ordenes
        ];
    }
}
