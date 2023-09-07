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
       "nombre_producto",
       "descripcion",
       "precio"
   ];
}
