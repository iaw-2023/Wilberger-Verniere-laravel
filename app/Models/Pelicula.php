<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
  
class Pelicula extends Model
{
    use HasFactory;
    protected $table = 'pelicula';
    protected $fillable = [
        'idGenero',
        'nombre'
    ];

    /*
        Agrega una pelicula de la lista de funciones
     */
    public static function agregarPelicula(Request $request)
    {
        $pelicula = new Pelicula;

        $pelicula->nombre     = $request->Nombre;
        $pelicula->idGenero   = $request->Genero;
        
        $pelicula->save();

    }

    /*
        Elimina una pelicula de la lista de Peliculas
     */
    public static function quitarPelicula(Request $request)
    {
        $pelicula = $request->Pelicula;
        $peliculaElem = Pelicula::find($pelicula);
        $peliculaElem->habilitado = false; 
        $peliculaElem->save();
    }
    public static function habilitarPelicula(Request $request)
    {
        $pelicula = $request->Pelicula;
        $peliculaElem = Pelicula::find($pelicula);
        $peliculaElem->habilitado = true;
        $peliculaElem->save();  
    }
}