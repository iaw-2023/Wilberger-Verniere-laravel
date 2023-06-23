<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Funcion;
use App\Models\Compra;
  
class DetallesCompra extends Model
{
    use HasFactory;
    protected $table = 'detalles_compra';
    protected $fillable = [
        'idFuncion',
        'idCompra',
        'cantidadTickets'
    ];

    public function funcion():HasOne{
        return $this->HasOne(Funcion::class, 'id','idFuncion');
    }

    public function compra():BelongsTo{
        return $this->BelongsTo(Compra::class);
    }
    
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