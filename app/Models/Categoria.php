<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Controllers\FotoController;
class Categoria extends Model
{
    //use HasFactory;
    protected $guarded = [];
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;
    protected $fillable = ['nombre_categoria', 'ruta_foto'];

}
