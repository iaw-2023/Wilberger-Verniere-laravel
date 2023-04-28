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
    public function agregarGenero(Request $request): RedirectResponse
    {
        $genero = new Genero;

        $genero->nombre = $request->Nombre;
        
        $genero->save();

        return redirect('/');
    }

    /*
        Elimina un genero de la lista de generos
     */
    public function quitarGenero(Request $request): RedirectResponse
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $genero = $request->Genero; //Id del genero

        Genero::delete($genero);
        Genero::truncate();

        return redirect('/');
    }

}