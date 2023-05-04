<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
  
class Genero extends Model
{
    use HasFactory;
    protected $table = 'genero';
    protected $fillable = [
        'nombre'
    ];

    /*
        Añade una genero a la lista de generos
     */
    public static function agregarGenero(Request $request)
    {
        $genero = new Genero;
        $genero->nombre = $request->Nombre;
        $genero->save();
    }

    /*
        Deshabilitar un genero de la lista de generos
     */
    public static function quitarGenero(Request $request)
    {
        $genero = $request->id;
        $elimGenero = Genero::where($genero);
        $elimGenero->habilitado = false;    
        $elimGenero->save();
    }

    /*
        Habilitar un genero de la lista de generos
     */
    public static function habilitarGenero(Request $request)
    {
        $genero = $request->id;
        $elimGenero = Genero::where($genero);
        $elimGenero->habilitado = true;    
        $elimGenero->save();
    }
}