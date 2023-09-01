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
        Schema::create('producto', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2023_09_01_102200_create_producto_table.php
            $table->id();
            $table->foreign('id_categoria')->references('id')->on('categoria')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_estado_producto')->references('id')->on('estado_producto')->onUpdate('cascade')->onDelete('cascade');
=======
            $table->bigIncrements('id_producto');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->unsignedBigInteger('id_estado_producto');
            $table->foreign('id_estado_producto')->references('id_estado_producto')->on('estado_producto');
>>>>>>> a6b1cb8176a423ef21ba19a6850730d2d7e775b9:database/migrations/2023_09_01_111756_create_producto_table.php
            $table->string('nombre_producto');
            $table->text('descripcion', );
            $table->double('precio', 3, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
