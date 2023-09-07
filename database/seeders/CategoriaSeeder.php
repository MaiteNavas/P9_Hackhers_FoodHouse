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
        Categoria::create(['nombre_categoria' => 'Desayunos']);
        Categoria::create(['nombre_categoria' => 'Entrantes']);
        Categoria::create(['nombre_categoria' => 'Ensaladas']);
        Categoria::create(['nombre_categoria' => 'Pastas']);
        Categoria::create(['nombre_categoria' => 'Carnes']);
        Categoria::create(['nombre_categoria' => 'Pescados']);
        Categoria::create(['nombre_categoria' => 'Postres']);
        Categoria::create(['nombre_categoria' => 'Bebidas']);

    }
}
