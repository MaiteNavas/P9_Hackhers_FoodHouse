<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoProducto extends Model
{
   protected $table = 'estado_producto';
   protected $primaryKey = 'id_estado_producto';
   public $timestamps = false;
   protected $fillable =[
       "nombre_estado_producto"
   ];
   public function products(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_estado_producto', 'id_producto');
    }
   protected $guarded = [];

}
