<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
  
class Sala extends Model
{
    use HasFactory;
    protected $table = 'sala';
    protected $fillable = [
        'nombre', 
        'capacidadMaxima'
    ];

    public static function index()
    {
        return Sala::orderBy('id')->paginate(10);
    }

    public static function habilitadas()
    {
        return Sala::where('habilitado',true)->get();
    }


    /*
        Añade una sala a la lista de salas
     */
    public static function agregarSala(Request $request)
    {
        $sala = new Sala;

        $sala->nombre = $request->Nombre;
        $sala->capacidadMaxima = $request->Capacidad;
        
        $sala->save();
    }

    /*
        Elimina un sala de la lista de salas
     */
    public static function quitarSala(Request $request)
    {
        $sala = $request->Sala;
        $salaElem = Sala::find($sala);
        $salaElem->habilitado = false;
        $salaElem->save();   
    }

    /*
        Habilita una sala de la lista de salas
     */
    public static function habilitarSala(Request $request)
    {
        $sala = $request->Sala;
        $salaElem = Sala::find($sala);
        $salaElem->habilitado = true; 
        $salaElem->save();  
    }
}