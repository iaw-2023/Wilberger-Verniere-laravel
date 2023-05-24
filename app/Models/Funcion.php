<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
  
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

    public static function index()
    {
        return Funcion::orderBy('id')->paginate(10);
    }

    public static function agregarFuncion(Request $request)
    {
        $funcion = new Funcion;

        $funcion->idPelicula = $request->Pelicula;
        $funcion->idSala     = $request->Sala;
        $funcion->fecha      = $request->Fecha;
        $funcion->hora       = $request->Hora;
        
        $funcion->save();
    }

    public static function editarFuncion(Request $request, $id)
    {
        $funcion = Funcion::find($id);

        $funcion->idPelicula = $request->Pelicula;
        $funcion->idSala     = $request->Sala;
        $funcion->fecha      = $request->Fecha;
        $funcion->hora       = $request->Hora;

        $funcion->save();
    }

    public static function quitarFuncion(Request $request)
    {
        $funcion = $request->Funcion;
        $funcionElem = Funcion::find($funcion);
        $funcionElem->habilitado = false;
        $funcionElem->save();  
    }
    public static function habilitarFuncion(Request $request)
    {
        $funcion = $request->Funcion;
        $funcionElem = Funcion::find($funcion);
        $funcionElem->habilitado = true;
        $funcionElem->save();  
    }
}