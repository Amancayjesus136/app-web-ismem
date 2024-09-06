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
        Schema::create('informacions', function (Blueprint $table) {
            $table->id      ('id_informacion');
            $table->string  ('inf_titulo');
            $table->text    ('inf_descripcion');
            $table->string  ('inf_imagen');
            $table->string  ('user_created_info');
            $table->string  ('user_updated_info');
            $table->date    ('date_created_info');
            $table->date    ('date_updated_info');
            $table->integer ('inf_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacions');
    }
};
