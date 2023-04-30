<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrena extends Model
{
    use HasFactory;
    protected $table = 'estrena_funcion_pelicula_sala';
    protected $fillable = [
        'idPelicula',
        'idSala',
        'idFuncion'
    ];
}