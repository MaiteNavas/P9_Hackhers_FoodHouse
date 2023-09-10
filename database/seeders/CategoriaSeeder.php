<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre_categoria' => 'Desayunos','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Desayunos.jpeg']);
        Categoria::create(['nombre_categoria' => 'Entrantes','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Entrantes.jpeg']);
        Categoria::create(['nombre_categoria' => 'Ensaladas','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Ensaladas.jpeg']);
        Categoria::create(['nombre_categoria' => 'Pastas','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pastas.jpeg']);
        Categoria::create(['nombre_categoria' => 'Carnes','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Carnes.jpeg']);
        Categoria::create(['nombre_categoria' => 'Pescados','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Pescados.jpeg']);
        Categoria::create(['nombre_categoria' => 'Postres','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Postres.jpeg']);
        Categoria::create(['nombre_categoria' => 'Bebidas','ruta_foto' => 'https://hackhers.s3.eu-north-1.amazonaws.com/categorias/Bebidas.jpeg']);

    }
}
