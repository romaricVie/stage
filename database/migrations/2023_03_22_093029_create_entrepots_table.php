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
        Schema::create('entrepots', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('adresse_geographique');
            $table->string('description')->nullable();
            $table->string('batiment')->nullable();
            $table->string('superficie')->nullable();
            $table->string('etage')->nullable();
            $table->string('piece')->nullable();
            $table->string('parking')->nullable();
            $table->string('ville')->nullable(); 
            $table->string('pays')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrepots');
    }
};
