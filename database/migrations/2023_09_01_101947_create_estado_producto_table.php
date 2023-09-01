<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estado_producto', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2023_09_01_101947_create_estado_producto_table.php
            $table->id();
            $table->string('nombre_estado_producto');
=======
            $table->id('id_estado_producto');
            
>>>>>>> a6b1cb8176a423ef21ba19a6850730d2d7e775b9:database/migrations/2023_09_01_085441_create_estado_producto_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_producto');
    }
};
