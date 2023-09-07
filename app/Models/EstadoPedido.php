<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
    use HasFactory;
    protected $table = 'estado_pedido';
    protected $primaryKey = 'id_estado_pedido';
    public $timestamps = false;
    protected $fillable =[
        "nombre_estado_pedido"
    ];
}