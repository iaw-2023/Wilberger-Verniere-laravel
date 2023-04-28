<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
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
    public function agregarPelicula(Request $request)
    {
        //VALIDAR SI IDGENER ES VALIDO
        $pelicula = new Pelicula;

        $pelicula->nombre     = $request->Nombre;
        $pelicula->idGenero   = $request->Genero;
        
        $pelicula->save();

    }

    /*
        Elimina una pelicula de la lista de Peliculas
     */
    public function quitarPelicula(Request $request)
    {
        //VALIDAR ID SI EXISTE EN LA TABLA
        $pelicula = $request->Pelicula; //Id de la pelicula

        Pelicula::delete($pelicula);
        Pelicula::truncate();

    }
}