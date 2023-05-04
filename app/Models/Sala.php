<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Sala extends Model
{
    use HasFactory;
    protected $table = 'sala';
    protected $fillable = [
        'nombre', 
        'capacidadMaxima'
    ];

    /*
        Añade una sala a la lista de salas
     */
    public function agregarSala(Request $request)
    {
        $sala = new Sala;

        $sala->nombre = $request->Nombre;
        $sala->capacidadMaxima = $request->Capacidad;
        
        $sala->save();

    }

    /*
        Elimina un sala de la lista de salas
     */
    public function quitarSala(Request $request)
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $sala = $request->id; //Id del sala
        $elimSala = Sala::find($sala);
        $elimSala->habilitado = false;
        $elimSala->save();   
    }

    /*
        Habilita una sala de la lista de salas
     */
    public function habilitarSala(Request $request)
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $sala = $request->id; //Id del sala
        $habSala = Sala::find($sala);
        $habSala->habilitado = true;
        $habSala->save();
    }
}