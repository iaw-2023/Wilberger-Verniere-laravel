<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pelicula;
  
class Genero extends Model
{
    use HasFactory;
    protected $table = 'genero';
    protected $fillable = [
        'nombre'
    ];

    public function peliculas():hasMany{
        return $this->hasMany(Pelicula::class, 'idGenero');
    }
    
    public static function index()
    {
        return Genero::orderBy('id')->paginate(10);
    }

    public static function elementosHabilitados()
    {
        return Genero::where('habilitado',true)->get();
    }

    /*
        Añade una genero a la lista de generos
     */
    public static function agregarGenero(Request $request)
    {
        $genero = new Genero;

        $genero->nombre = $request->Nombre;

        $genero->save();
    }

    public static function editarGenero(Request $request, $id)
    {
        $genero = Genero::find($id);

        $genero->nombre = $request->Nombre;

        $genero->save();
    }

    /*
        Habilitar un genero de la lista de generos
     */
    public static function habilitarGenero(Request $request)
    {
        $genero = $request->Genero;
        $generoElem = Genero::find($genero);
        $generoElem->habilitado = true; 
        $generoElem->save();   
    }

    /*
        Deshabilitar un genero de la lista de generos
     */
    public static function deshabilitarGenero(Request $request)
    {
        $genero = $request->Genero;
        $generoElem = Genero::find($genero);
        $generoElem->habilitado = false;
        $generoElem->save(); 
    }

    public static function nombreGenero($id)
    {
        $genero = Genero::find($id);
        return $genero->nombre;
    }
}