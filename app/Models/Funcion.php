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
        $funcion = new Funcion;

        $funcion->idPelicula = $request->Pelicula;
        $funcion->idSala     = $request->Sala;
        $funcion->fecha      = $request->Fecha;
        $funcion->hora       = $request->Hora;
        
        $funcion->save();
    }

    public function quitarFuncion(Request $request)
    {
        $funcion = $request->Funcion;
        $funcionElem = Funcion::find($funcion);
        $funcionElem->habilitado = false;
        $funcionElem->save();  
    }
    public function habilitarFuncion(Request $request)
    {
        $funcion = $request->Funcion;
        $funcionElem = Funcion::find($funcion);
        $funcionElem->habilitado = true;
        $funcionElem->save();  
    }
}