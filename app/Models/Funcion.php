<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pelicula;
use App\Models\Sala;
use App\Models\DetallesCompra;
  
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

    public function sala():HasOne {
        return $this->HasOne(Sala::class, 'id', 'idSala');
    }

    public function pelicula():HasOne{
        return $this->HasOne(Pelicula::class, 'id', 'idPelicula');
    }

    public function detalles():HasMany{
        return $this->HasMany(DetallesCompra::class, 'idFuncion');
    }

    public static function index()
    {
        return Funcion::orderBy('id')->paginate(10);
    }

    public static function elementosHabilitados()
    {
        return Funcion::where('habilitado',true)->get();
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