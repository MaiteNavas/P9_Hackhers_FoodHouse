<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    protected $fillable =[
        "nombre",
        "apellidos",
        "correo",
        "direccion",
        "telefono"
    ];
    public function pedido(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }
}
