<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model 
{
   protected $table = 'usuario';
   protected $primaryKey = 'id_usuario';
   public $timestamps = false;
   protected $fillable=[
    "nombre",
    "apellidos",
    "correo",
    "direccion",
    "telefono"
   ] ;
}

