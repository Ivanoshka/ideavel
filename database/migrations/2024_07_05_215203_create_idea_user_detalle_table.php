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
        Schema::create('idea_user_detalle', function (Blueprint $table) {
            $table->id();
            //llave foranea
            $table->foreignId('idea_id')->constrained()->cascadeOnDelete(); //usamos cascadeOnDelete porque si se borra la publicacion se borra la info de esa publicacion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idea_user_detalle');
    }
};
