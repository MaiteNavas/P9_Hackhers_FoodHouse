<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregar(Request $request)
    {
        // Obtén el ID del producto que deseas agregar al carrito desde el formulario
        $productoId = $request->input('id_producto');

        // Recupera el producto desde la base de datos
        $producto = Producto::find($productoId);

        // Verifica si el producto existe
        if (!$producto) {
            return redirect()->route('producto.index')->with('error', 'Producto no encontrado');
        }

        // Verifica si ya existe un carrito en la sesión, si no, crea uno
        $carrito = session()->get('carrito', []);

        // Verifica si el producto ya está en el carrito
        if (array_key_exists($productoId, $carrito)) {
            // Si el producto ya está en el carrito, aumenta la cantidad
            $carrito[$productoId]['cantidad']++;
        } else {
            // Si el producto no está en el carrito, agrégalo
            $carrito[$productoId] = [
                'id' => $producto->id_producto,
                'nombre' => $producto->nombre_producto,
                'precio' => $producto->precio,
                'cantidad' => 1,
            ];
        }

        // Actualiza el carrito en la sesión
        session()->put('carrito', $carrito);

        // Redirige de vuelta a la lista de productos con un mensaje de éxito
        return redirect()->route('producto.index')->with('success', 'Producto agregado al carrito');
    }
}
