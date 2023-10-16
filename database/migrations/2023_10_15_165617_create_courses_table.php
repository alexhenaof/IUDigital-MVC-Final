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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad_creditos');
            $table->string('nombre_docente');
            $table->string('prerrequisito')->nullable();
            $table->integer('trabajo_autonomo');
            $table->integer('trabajo_dirigido');
            $table->string('programa');
            $table->integer('semestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
