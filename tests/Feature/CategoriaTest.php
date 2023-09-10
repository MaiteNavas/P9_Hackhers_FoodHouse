<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CategoriaTest extends TestCase
{
    // TODO: arreglar con amazon
   /*  private $categoriaMock = [
        'nombre_categoria' => 'Ensaladas',
    ];
    public function test_index_categoria(): void
    {
        Artisan::call('migrate');

        $response = $this->get('admin/categoria');
        $response
            ->assertStatus(200)
            ->assertSee('LISTA DE CATEGORIAS');
    }

    public function test_create_categoria(): void
    {
        Artisan::call('migrate');

        $responseCreate = $this->get('admin/categoria/create');
        $responseCreate
            ->assertStatus(200)
            ->assertSee('Crear Categoria');

        $responseStore = $this->post('/admin/categoria/store', $this->categoriaMock);

        $responseStore
            ->assertStatus(302)
            ->assertRedirect('/admin/categoria');
        
        $this->assertDatabaseHas('categoria', $this->categoriaMock);
    }

    public function test_update_categoria(): void
    {
        Artisan::call('migrate');

        // Creamos la categoria Ensalada
        $this->post('/admin/categoria/store', $this->categoriaMock);

        // Verificamos que la categoria ensalada existe en el listado
        $responseCategoria = $this->get('/admin/categoria');
        $responseCategoria->assertStatus(200)
            ->assertSee('Ensaladas');
        
        // Verificamos que la categoria existe en el formulario de editar
        $responseEditForm = $this->get('admin/categoria/edit/1');
        $responseEditForm->assertStatus(200)
            ->assertSee('Ensaladas');

        // modificamos la categoria
        $responseUpdate = $this->post('/admin/categoria/update/1', [
            'nombre_categoria' => 'Postres',
        ]);

        // verificamos que nos mande a la lista
        $responseUpdate
            ->assertStatus(302)
            ->assertRedirect('/admin/categoria');
        
        // Verificamos en la vista que el cambio se ha realizado
        $responseCategoriaUpdated = $this->get('/admin/categoria');
        $responseCategoriaUpdated->assertStatus(200)
            ->assertSee('Postre');  
        
        // verificamos en base de datos
        $this->assertDatabaseHas('categoria',  [
            'nombre_categoria' => 'Postres',
        ]);
        
    }

    public function test_delete_categoria(): void
    {
        Artisan::call('migrate');

        // Creamos la categoria
        $this->post('/admin/categoria/store', $this->categoriaMock);

         // Verificamos que la categoria ensalada existe en el listado
         $responseCategoria = $this->get('/admin/categoria');
         $responseCategoria->assertStatus(200)
             ->assertSee('Ensaladas');
        
        // verificamos en base de datos la categoria
        $this->assertDatabaseHas('categoria', $this->categoriaMock);

        // borramos la categoria y verificamos el redirect
        $responseDelete = $this->delete('/admin/categoria/delete/1');
        $responseDelete
            ->assertStatus(302)
            ->assertRedirect('/admin/categoria');

        // verificamo que la categoria fue borrada de la base de datos
        $this->assertDatabaseMissing('categoria', $this->categoriaMock);
    } */
}
