<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoPedido;
class EstadoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        EstadoPedido::create(['nombre_estado_pedido' => 'Carrito']);
        EstadoPedido::create(['nombre_estado_pedido' => 'Creado']);
        EstadoPedido::create(['nombre_estado_pedido' => 'En curso']);
        EstadoPedido::create(['nombre_estado_pedido' => 'Enviado']);
        EstadoPedido::create(['nombre_estado_pedido' => 'Completado']);
    }
}