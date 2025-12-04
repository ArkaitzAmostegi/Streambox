<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->integer('duracion')->nullable();  
            $table->year('anio')->nullable();

            // Relación 1:N con directors
            $table->foreignId('director_id')->constrained()->cascadeOnDelete();

            //Relación con category
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
