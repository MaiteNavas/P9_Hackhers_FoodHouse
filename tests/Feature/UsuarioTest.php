<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    
    /**
     * A basic feature test example.
     */
    public function test_index_usuario(): void
    {
        Artisan::call('migrate');

        $response = $this->get('/admin/usuario');
        $response->assertStatus(200)
            ->assertSee('LISTA DE USUARIOS');
    }
    public function test_create_usuario(): void
    {
        Artisan::call('migrate');

        $usuarioMock = [
            'nombre' => 'pedro',
            'apellidos' => 'lopez',
            'correo' => 'pedro@gmail.com',
            'direccion' => 'calle sin nombre',
            'telefono' => '123123123',
        ];

        $responseCreate = $this->get('admin/usuario/create');
        $responseCreate
            ->assertStatus(200)
            ->assertSee('Crear usuario');

        $responseStore = $this->post('/admin/usuario/store', $usuarioMock);

        $responseStore
            ->assertStatus(302)
            ->assertRedirect('/admin/usuario');
        
        $this->assertDatabaseHas('usuario', $usuarioMock);
    }
}
