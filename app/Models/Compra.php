<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
  
class Compra extends Model
{
    use HasFactory;
    protected $table = 'compra';
    protected $fillable = [
        'emailCliente',
        'observaciones',
        'fecha'
    ];

    public static function index()
    {
        return Compra::orderBy('id')->paginate(10);
    }

    public static function agregarCompra(Request $request)
    {
        $Compra = new Compra;

        $Compra->emailCliente      = $request->Email;
        $Compra->fecha             = $request->Fecha;
        $Compra->observaciones     = $request->Observaciones;
        
        $Compra->save();
    }

    public static function quitarCompra(Request $request)
    {
        $Compra = $request->Compra;
        $CompraElem = Compra::find($Compra);
        $CompraElem->destroy();  
    }
}