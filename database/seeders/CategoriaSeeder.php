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
        Categoria::create(['nombre_categoria' => 'Entrantes','imagen' => 'Entrantes']);
        Categoria::create(['nombre_categoria' => 'Ensaladas','imagen' => 'Ensaladas']);
        Categoria::create(['nombre_categoria' => 'Pastas','imagen' => 'Pastas']);
        Categoria::create(['nombre_categoria' => 'Carnes','imagen' => 'Carnes']);
        Categoria::create(['nombre_categoria' => 'Pescados','imagen' => 'Pescados']);
        Categoria::create(['nombre_categoria' => 'Postres','imagen' => 'Postres']);
        Categoria::create(['nombre_categoria' => 'Bebidas','imagen' => 'Bebidas']);

    }
}
