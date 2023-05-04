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
        $sala = $request->id; //Id del sala
<<<<<<< HEAD
        $salaElem = Sala::find($sala);
        $salaElem->habilitado = false;
        $salaElem->save();   
=======
        $elimSala = Sala::find($sala);
        $elimSala->habilitado = false;
        $elimSala->save();   
>>>>>>> a6c952d1a393e17e657b7b2fbac7e6304ffc6c55
    }

    /*
        Habilita una sala de la lista de salas
     */
    public function habilitarSala(Request $request)
    {
        $sala = $request->id; //Id del sala
<<<<<<< HEAD
        $salaElem = Sala::find($sala);
        $salaElem->habilitado = true; 
        $salaElem->save();  
=======
        $habSala = Sala::find($sala);
        $habSala->habilitado = true;
        $habSala->save();
>>>>>>> a6c952d1a393e17e657b7b2fbac7e6304ffc6c55
    }
}