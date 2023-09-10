<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
   protected $table = 'producto';
   protected $primaryKey = 'id_producto';
   public $timestamps = false;
   protected $fillable =[
    "id_categoria",
    "id_estado_producto",
    "nombre_producto",
    "descripcion",
    "precio",
   ];
   public function categoria(): BelongsTo
   {
       return $this->belongsTo(Categoria::class, 'id_categoria');
   }
   public function pedido()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_producto', 'id_producto', 'id_pedido')
                    ->withPivot('cantidad', 'precio_unitario');
    }
   protected $guarded = [];

}
