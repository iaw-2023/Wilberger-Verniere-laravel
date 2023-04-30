<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
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
    public function agregarGenero(Request $request)
    {
        $genero = new Genero;
        $genero->nombre = $request->Nombre;
        $genero->save();
    }

    /*
        Elimina un genero de la lista de generos
     */
    public function quitarGenero(Request $request)
    {
        //VALIDAR ID SI EXISTE EN LA TABLA
        $genero = $request->Genero; //Id del genero
        $elimGenero = Genero::where('id',$genero);
        $elimGenero->habilitado = false;    
    }
}