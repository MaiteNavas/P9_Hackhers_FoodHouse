<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstadoPedido extends Model
{

    protected $table = 'estado_pedido';
    protected $primaryKey = 'id_estado_pedido';
    public $timestamps = false;
    protected $fillable =[
        "nombre_estado_pedido"
    ];
    public function pedido(): BelongsTo
   {
       return $this->belongsTo(Pedido::class, 'id_estado_pedido','id_pedido');
   }
}