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
        Producto::create(['nombre_producto' => 'Acai',
        'descripcion' => 'Acai con frutas de temporada y granola',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Acai.webp',
        'id_categoria' => 1,
        'precio' => 8.99,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Carnes con verduras de temporada',
        'descripcion' => 'Carne de ternera con verduras asadas de temporada',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Carne+con+Verduras+de+Estacion.webp',
        'id_categoria' => 5,
        'precio' => 11.99,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Cervezas',
        'descripcion' => 'Cervezas artesanales',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Cervezas.jpg',
        'id_categoria' => 8,
        'precio' => 3.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Corvina asada',
        'descripcion' => 'Corvina asada con sales y esencias aromáticas',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Corvina+asada.jpeg',
        'id_categoria' => 6,
        'precio' => 12.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Costillas',
        'descripcion' => 'Costillas de cerdo de cocción lenta',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Costillas.jpeg',
        'id_categoria' => 5,
        'precio' => 13.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Desayuno Americano',
        'descripcion' => 'Tortitas caseras con salsa de caramelo y frutos del bosque',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Americano.webp',
        'id_categoria' => 1,
        'precio' => 6.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Desayuno Especial',
        'descripcion' => 'Tortitas caseras con salsa fresca y frutos del bosque',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Desayuno+Especial.jpg',
        'id_categoria' => 1,
        'precio' => 6.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Ensalada de Salmon',
        'descripcion' => 'Salmon noruego con verduras y salsa de maracuyá',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+de+Salmon.jpg',
        'id_categoria' => 3,
        'precio' => 10.50,
        'id_estado_producto' => 1]);
        
        Producto::create(['nombre_producto' => 'Ensalada Primavera',
        'descripcion' => 'Ensalada de verdes con calabacín, jengibre y plátano',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Primavera.jpg',
        'id_categoria' => 3,
        'precio' => 11.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Ensalada Tropical',
        'descripcion' => 'Ensalada de Kale crocante con lascas de parmesano',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Ensalada+Tropical.jpg',
        'id_categoria' => 3,
        'precio' => 11.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Entrante de Guacamole',
        'descripcion' => 'Mousse de Guacamole',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Entrante+de+Guacamole.jpeg',
        'id_categoria' => 2,
        'precio' => 8.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Entrante de Jamon',
        'descripcion' => 'Selección de jamones de bellota',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+de+Jamon.jpeg',
        'id_categoria' => 2,
        'precio' => 9.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Entrante de Queso',
        'descripcion' => 'Selección de Quesos de la región',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Entrantes+quesos.avif',
        'id_categoria' => 2,
        'precio' => 9.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Guacamole',
        'descripcion' => 'Guacamole suave',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Guacamole.jpg',
        'id_categoria' => 2,
        'precio' => 6.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Hamburguesa Especial',
        'descripcion' => 'Carne, bacón, queso, lechuga y tomate',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Especial.jpg',
        'id_categoria' => 5,
        'precio' => 6.99,
        'id_estado_producto' => 1]);
        
        Producto::create(['nombre_producto' => 'Hamburguesa Gourmet',
        'descripcion' => 'Carne de ternera adobada, crocantes de bacón, queso azul, zanahoria y cebolla caramelizada',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Hamburguesa+Gourmet.jpg',
        'id_categoria' => 5,
        'precio' => 8.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Panqueques de Pistachio',
        'descripcion' => 'Panqueques con masa de pistachio, caramelo y platano',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Panqueques+de+Pistachio.webp',
        'id_categoria' => 7,
        'precio' => 7.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Pasta con Mariscos',
        'descripcion' => 'Pasta casera con salsa de mariscos',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+mariscos.webp',
        'id_categoria' => 4,
        'precio' => 10.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Pasta con salsa de Setas',
        'descripcion' => 'Pasta casera con salsa de setas',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Pasta+con+Salsa+de+Setas.webp',
        'id_categoria' => 4,
        'precio' => 10.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Pulpo Marinado',
        'descripcion' => 'Pulpo marinado con rabas y platano',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Pulpo+marinado.jpeg',
        'id_categoria' => 6,
        'precio' => 18.50,
        'id_estado_producto' => 1]);
        
        Producto::create(['nombre_producto' => 'Ramen con Verduras',
        'descripcion' => 'Plato asiático  de ramen con verduras y caldo de pollo',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Ramen+con+verduras+de+estacion.jpeg',
        'id_categoria' => 4,
        'precio' => 9.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Refresco',
        'descripcion' => 'Variedad de Refrescos',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Refrescos.jpg',
        'id_categoria' => 8,
        'precio' => 2.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Salmon',
        'descripcion' => 'Salmon con espinaca y tomates cherry',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Salmon.jpg',
        'id_categoria' => 6,
        'precio' => 17.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Tarta de Fresas',
        'descripcion' => 'Tarta de fresas con merengue',
        'ruta_foto_producto' => 'https: //hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Fresas.webp',
        'id_categoria' => 7,
        'precio' => 5.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Tarta de Zanahorias',
        'descripcion' => 'Tarta de zanahorias con nueces',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Tarta+de+Zanahorias.jpeg',
        'id_categoria' => 7,
        'precio' => 5.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Vinos',
        'descripcion' => 'Amplia carta de vinos de la region',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Vinos.jpg',
        'id_categoria' => 8,
        'precio' => 5.50,
        'id_estado_producto' => 1]);

        Producto::create(['nombre_producto' => 'Zumos',
        'descripcion' => 'Zumos exprimidos en el momento',
        'ruta_foto_producto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/Zumos.jpg',
        'id_categoria' => 8,
        'precio' => 2.50,
        'id_estado_producto' => 1]);


    }
}
