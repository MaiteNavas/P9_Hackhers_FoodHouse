<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id_pedido';
    public $timestamps = false;
    protected $fillable =[
        "id_usuario",
        "id_estado_pedido",
        "precio_pedido"
    ];
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
    public function estado_producto(): BelongsTo
    {
        return $this->belongsTo(EstadoProducto::class);
    }
    public function producto()
    {
        return $this->belongsToMany(Producto::class, 'pedido_producto', 'id_pedido', 'id_producto')
                    ->withPivot('cantidad', 'precio_unitario');
    }
}
