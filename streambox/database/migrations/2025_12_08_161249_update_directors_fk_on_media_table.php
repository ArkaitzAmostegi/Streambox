<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('media', function (Blueprint $table) {

        // 1) Eliminar la FK actual
        $table->dropForeign(['director_id']);

        // 2) Crear la nueva FK con restricción
        $table->foreign('director_id')
                ->references('id')->on('directors')
              ->restrictOnDelete(); // ahora no se podrá borrar directores usados
    });
}

public function down()
{
    Schema::table('media', function (Blueprint $table) {
        $table->dropForeign(['director_id']);

        $table->foreign('director_id')
                ->references('id')->on('directors')
              ->cascadeOnDelete(); // volver al estado anterior
    });
}

};
