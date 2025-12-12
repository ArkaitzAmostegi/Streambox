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
        DB::table('media')->update([
            'tipo' => DB::raw("
                CASE category_id
                    WHEN 1 THEN 'documental'
                    WHEN 2 THEN 'pelicula'
                    WHEN 3 THEN 'serie'
                END
            ")
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            //
        });
    }
};
