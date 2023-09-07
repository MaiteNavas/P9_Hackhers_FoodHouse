<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create(['id_categoria' => 1,
        'id_estado_producto' => 1,
        'nombre_producto' => 'Desayuno simple',
        'descripcion' => 'Tostada con mantequilla y mermelada, café o té y zumo de naranja natural',
        'precio' => 2.20
    ]);
        Producto::create(['id_categoria' => 2,
        'id_estado_producto' => 1,
        'nombre_producto' => 'Patatas bravas',
        'descripcion' => 'Patatas bravas con salsa casera picante',
        'precio' => 6.50
    ]);
        Producto::create(['id_categoria' => 3,
        'id_estado_producto' => 1,
        'nombre_producto' => 'Ensalada César',
        'descripcion' => 'Ensalada César con pollo a la plancha',
        'precio' => 8.75
    ]);
        Producto::create(['id_categoria' => 4,
        'id_estado_producto' => 1,
        'nombre_producto' => 'Macarrones boloñesa',
        'descripcion' => 'Macarrones con salsa casera de carne y queso parmesano',
        'precio' => 9.90
    ]);
    Producto::create(['id_categoria' => 5,
        'id_estado_producto' => 1,
        'nombre_producto' => 'Escalopines al Cabrales',
        'descripcion' => 'Escalopines de ternera con salsa Cabrales',
        'precio' => 12.90
    ]);
    Producto::create(['id_categoria' => 6,
    'id_estado_producto' => 1,
    'nombre_producto' => 'Tarta de queso',
    'descripcion' => 'Tarta de queso tradicional',
    'precio' => 4.20
    ]);
    Producto::create(['id_categoria' => 6,
    'id_estado_producto' => 1,
    'nombre_producto' => 'Tarta de queso',
    'descripcion' => 'Tarta de queso tradicional',
    'precio' => 4.20
    ]);
    Producto::create(['id_categoria' => 8,
    'id_estado_producto' => 1,
    'nombre_producto' => 'Agua',
    'descripcion' => '50 cl',
    'precio' => 1.75
    ]);
    Producto::create(['id_categoria' => 8,
    'id_estado_producto' => 1,
    'nombre_producto' => 'Coca Cola',
    'descripcion' => '33 cl',
    'precio' => 2.20
    ]);
    Producto::create(['id_categoria' => 8,
    'id_estado_producto' => 1,
    'nombre_producto' => 'Cerveza',
    'descripcion' => '33 cl',
    'precio' => 2.50
    ]);

    }
}