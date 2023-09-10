<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    public function test_index_producto(): void
    {
        Artisan::call('migrate');

        $response = $this->get('/admin/producto');
        // $response->assertStatus(200);
        var_dump($response->dump());
            // ->assertSee('LISTA DE CATEGORIAS');
    }
}
