<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class DetallesCompra extends Model
{
    use HasFactory;
    protected $table = 'detalles_compra';
    protected $fillable = [
        'idFuncion',
        'idCompra',
        'cantidadTickets'
    ];

    public static function index(Request $request)
    {
        $ordenes = DetallesCompra::where('idCompra',$request->idCompra)
            ->orderBy('id')
            ->paginate(10);
        return $ordenes;
    }

    public static function agregarDetallesCompra(Request $request, $idCompra)
    {
        $detallesCompra = new DetallesCompra;

        $detallesCompra->cantTickets       = $request->NroTickets;
        $detallesCompra->idFuncion         = $request->Funcion;
        $detallesCompra->idCompra          = $idCompra;
        
        $detallesCompra->save();
    }

    public static function quitarDetallesCompra(Request $request)
    {
        $detallesCompra = $request->DetallesCompra;
        $detallesCompraElem = DetallesCompra::find($detallesCompra);
        $detallesCompraElem->destroy();  
    }
}