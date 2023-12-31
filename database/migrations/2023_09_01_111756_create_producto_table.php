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
            $table->bigIncrements('id_producto');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->unsignedBigInteger('id_estado_producto');
            $table->foreign('id_estado_producto')->references('id_estado_producto')->on('estado_producto');
            $table->string('nombre_producto');
            $table->text('descripcion', );
            $table->decimal('precio', 5, 2);
            $table->string('ruta_foto_producto')->nullable();
        });

          //$table->id();
          //$table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
