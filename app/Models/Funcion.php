<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Funcion extends Model
{
    use HasFactory;
    protected $table = 'funcion';
    protected $fillable = [
        'idPelicula',
        'idSala',
        'fecha',
        'hora'
    ];


    public function agregarFuncion(Request $request)
    {
         //VALIDAR SI IDPELICULA Y IDSALA SON VALIDOS
        $funcion = new Funcion;

        /* $funcion->idPelicula = $request->Pelicula;
        $funcion->idSala     = $request->Sala; */
        $funcion->fecha      = $request->Fecha;
        $funcion->hora       = $request->Hora;
        
        $funcion->save();
    }

    public function quitarFuncion(Request $request)
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $funcion = $request->Funcion; //Id de la funcion

        Funcion::delete($funcion);
        Funcion::truncate();
    }
}