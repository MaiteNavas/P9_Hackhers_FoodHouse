<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Producto;
    use App\Models\Categoria;
    use App\Models\EstadoProducto;
    use App\Http\Controllers\Controller;
    use Aws\S3\S3Client;

    class ProductoController extends Controller
    {
        public function index_producto(){
            $productos = Producto::all($columns = ['*']);
    
            return view('admin.producto.index_producto',compact('productos'));
        }
        public function create_producto(){
            $categorias = Categoria::all($columns = ['*']);
            $estadoProductos = EstadoProducto::all($columns = ['*']);
            $rutasFotosEnS3 = [
                'https://hackhers.s3.eu-north-1.amazonaws.com/Acai.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Carne+con+Verduras+de+Estacion.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Cervezas.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Corvina+asada.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Costillas.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Americano.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Especial.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+de+Salmon.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Primavera.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Tropical.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrante+de+Guacamole.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+de+Jamon.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+quesos.avif',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Guacamole.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Especial.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Gourmet.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Panqueques+de+Pistachio.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+mariscos.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+Salsa+de+Setas.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pulpo+marinado.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ramen+con+verduras+de+estacion.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Refrescos.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Salmon.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Fresas.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Zanahorias.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Vinos.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Zumos.jpg',

            ];

            return view('admin.producto.create_producto', compact('categorias', 'estadoProductos', 'rutasFotosEnS3'));
        }
        public function store_producto(Request $request) {
            $s3 = new S3Client([
                'version' => 'latest',
                'region'  => 'eu-north-1', 
                'credentials' => [
                    'key'    => 'AKIA6B235Y4PHMHLESEU',
                    'secret' => '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',
                ],
            ]);
            $bucket = 'hackhers';
            $rutaFotoEnS3 = $request->input('imagen_producto');
        
            $urlFoto = $s3->getObjectUrl($bucket, $rutaFotoEnS3);
        
            Producto::create([
                'nombre_producto' => $request->nombre_producto,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'id_categoria'=> $request->id_categoria,
                'id_estado_producto'=> $request->id_estado_producto,
                'ruta_foto_producto' => $urlFoto,
            ]);
        
            return redirect()->route('producto.index');
        }
        
        public function edit_producto(Producto $producto){
            $categorias = Categoria::all($columns = ['*']);
            $estadoProductos = EstadoProducto::all($columns = ['*']);
            $rutasFotosEnS3 = [
                'https://hackhers.s3.eu-north-1.amazonaws.com/Acai.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Carne+con+Verduras+de+Estacion.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Cervezas.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Corvina+asada.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Costillas.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Americano.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Especial.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+de+Salmon.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Primavera.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Tropical.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrante+de+Guacamole.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+de+Jamon.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+quesos.avif',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Guacamole.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Especial.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Gourmet.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Panqueques+de+Pistachio.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+mariscos.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+Salsa+de+Setas.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Pulpo+marinado.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Ramen+con+verduras+de+estacion.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Refrescos.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Salmon.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Fresas.webp',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Zanahorias.jpeg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Vinos.jpg',
                'https://hackhers.s3.eu-north-1.amazonaws.com/Zumos.jpg',

            ];

            return view('admin.producto.edit_producto',compact('categorias','estadoProductos','producto', 'rutasFotosEnS3'));
        }
        public function update_producto(Request $request,Producto $producto){
            $producto->update([
                'nombre_producto' => $request->nombre_producto,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'id_categoria'=> $request->id_categoria,
                'id_estado_producto'=> $request->id_estado_producto,
            ]);

            return redirect()->route('producto.index');
        }
        public function delete_producto(Producto $producto){
            $producto->delete();
            return redirect()->route('producto.index');
        }

        public function show_producto(){
            $productos = Producto::all($columns = ['*']);
    
            return view('usuario.index_usuario',compact('productos'));
        }



    }

        
