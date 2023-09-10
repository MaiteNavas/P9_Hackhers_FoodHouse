<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ProductoController;
use Mockery;
use Illuminate\Support\Facades\View;

class ProductoControllerTest extends TestCase
{
   
    public function test_index_producto(): void
    {
        $productos = [
            'id_producto' => 1,
            'id_categoria' => 1,
            'id_estado_producto' => 1,
            'nombre_producto' => 'ensalada',
            'descripcion ' => 'Rica ensalada',
            'precio' => 1,
        ];
        $productMock = Mockery::mock('overload:App\Models\Producto');
        $productMock->shouldReceive('all')->once()
            ->with(['*'])
            ->andReturn($productos);
        
        View::shouldReceive('make')
            ->once();
            // ->with('admin.producto.index_producto', compact('productos'));
            // ->andReturn('Contenido de la vista mockeada');
    
        $productoController = new ProductoController();
        $productoController->index_producto();
    }
}
