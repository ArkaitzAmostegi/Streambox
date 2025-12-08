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
    Schema::table('media_genres', function (Blueprint $table) {

        $table->dropForeign(['genre_id']);
        $table->dropForeign(['media_id']);

        $table->foreign('media_id')
                ->references('id')->on('media')
              ->cascadeOnDelete(); // esto sí puede ser cascade

        $table->foreign('genre_id')
                ->references('id')->on('genres')
              ->restrictOnDelete(); // evita borrar si está en uso
    });
}

public function down()
{
    Schema::table('media_genres', function (Blueprint $table) {

        $table->dropForeign(['genre_id']);
        $table->dropForeign(['media_id']);

        $table->foreign('media_id')
                ->references('id')->on('media')
                ->cascadeOnDelete();

        $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->cascadeOnDelete();
    });
}

};
