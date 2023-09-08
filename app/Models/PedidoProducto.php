<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoProducto extends Model
{
    protected $table = 'pedido_producto';
    public $timestamps = false;
    protected $fillable =[
        "id_pedido",
        "id_producto",
        "fecha_venta",
        "cantidad",
        "precio_unitario"
    ];
    public function pedido(): BelongsTo
   {
       return $this->belongsTo(Pedido::class);
   }
   public function producto(): BelongsTo
   {
       return $this->belongsTo(Producto::class);
   }
}
