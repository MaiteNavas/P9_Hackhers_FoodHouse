<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
   use HasFactory;
   protected $guarded = [];
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
       return $this->belongsTo(Categoria::class);
   }
}
