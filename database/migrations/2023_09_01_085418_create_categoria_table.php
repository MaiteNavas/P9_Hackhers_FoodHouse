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
        Schema::create('categoria', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->string('nombre_categoria');
=======
            $table->id('id_categoria');

        
            
            
>>>>>>> a6b1cb8176a423ef21ba19a6850730d2d7e775b9
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria');
    }
};
 
