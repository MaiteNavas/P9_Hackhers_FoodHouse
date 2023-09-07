<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoProducto;
class EstadoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoProducto::create(['nombre_estado_producto' => 'Disponible']);
        EstadoProducto::create(['nombre_estado_producto' => 'No disponible']);
    }
}