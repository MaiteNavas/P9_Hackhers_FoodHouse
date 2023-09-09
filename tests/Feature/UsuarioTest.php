<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    private $usuarioMock = [
        'nombre' => 'pedro',
        'apellidos' => 'lopez',
        'correo' => 'pedro@gmail.com',
        'direccion' => 'calle sin nombre',
        'telefono' => '123123123',
    ];
    /**
     * A basic feature test example.
     */
    public function test_index_usuario(): void
    {
        Artisan::call('migrate');

        $response = $this->get('/admin/usuario');
        $response
            ->assertStatus(200)
            ->assertSee('LISTA DE USUARIOS');
    }
    public function test_create_usuario(): void
    {
        Artisan::call('migrate');

        $responseCreate = $this->get('admin/usuario/create');
        $responseCreate
            ->assertStatus(200)
            ->assertSee('Crear usuario');

        $responseStore = $this->post('/admin/usuario/store', $this->usuarioMock);

        $responseStore
            ->assertStatus(302)
            ->assertRedirect('/admin/usuario');
        
        $this->assertDatabaseHas('usuario', $this->usuarioMock);
    }
    public function test_update_usuario(): void
    {
        Artisan::call('migrate');

        // Creamos al usuario pedro
        $this->post('/admin/usuario/store', $this->usuarioMock);

        // Verificamos que el usuario pedro existe en el index usuario
        $responseUsuario = $this->get('/admin/usuario');
        $responseUsuario->assertStatus(200)
            ->assertSee('pedro')
            ->assertSee('lopez');
        
        // Verificamos que el usuario pedro existe en el formulario de editar
        $responseEditForm = $this->get('admin/usuario/edit/1');
        $responseEditForm->assertStatus(200)
            ->assertSee('pedro')
            ->assertSee('lopez');

        // modificamos al usuario pedro
        $responseUpdate = $this->post('/admin/usuario/update/1', [
            ...$this->usuarioMock, 
            'nombre' => 'Julian',
        ]);

        // verificamos que nos mande a la lista
        $responseUpdate
            ->assertStatus(302)
            ->assertRedirect('/admin/usuario');
        
        // Verificamos en la vista que el cambio se ha realizado
        $responseUsuario = $this->get('/admin/usuario');
        $responseUsuario->assertStatus(200)
            ->assertSee('Julian')
            ->assertSee('lopez');   
        
        // verificamos en base de datos
        $this->assertDatabaseHas('usuario', [
            ...$this->usuarioMock, 
            'nombre' => 'Julian',
        ]);
        
    }

    public function test_delete_usuario(): void
    {
        Artisan::call('migrate');

        // Creamos al usuario pedro
        $this->post('/admin/usuario/store', $this->usuarioMock);

        // Verificamos que el usuario pedro existe en el index usuario
        $responseUsuario = $this->get('/admin/usuario');
        $responseUsuario->assertStatus(200)
            ->assertSee('pedro')
            ->assertSee('lopez');
        
        // verificamos en base de datos al usuario pedro
        $this->assertDatabaseHas('usuario', $this->usuarioMock);

        // borramos al usuario pedro y verificamos el redirect
        $responseDelete = $this->delete('/admin/usuario/delete/1');
        $responseDelete
            ->assertStatus(302)
            ->assertRedirect('/admin/usuario');

        // verificamo que el usuario pedro fue borrado de la base de datos
        $this->assertDatabaseMissing('usuario', $this->usuarioMock);
    }
}
