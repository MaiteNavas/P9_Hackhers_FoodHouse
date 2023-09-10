<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
<<<<<<< HEAD
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
     */
    public function run(): void
    {
        $this ->call([
            CategoriaSeeder::class,
            EstadoProductoSeeder::class,
            EstadoPedidoSeeder::class,
            ProductoSeeder::class
        ]);
>>>>>>> 642f8cc91bec36fb7e37d9772e66be30943d6ffd
    }
}
