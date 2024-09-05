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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id      ('id_consulta');
            $table->string  ('con_carrera');
            $table->integer ('con_numero_dni');
            $table->string  ('con_ciudad');
            $table->string  ('con_nombres');
            $table->string  ('con_apellidos');
            $table->integer ('con_celular');
            $table->string  ('con_genero');
            $table->string  ('con_correo')->unique();
            $table->text    ('con_mensaje')->nullable();
            $table->integer ('con_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
