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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('firstname',30);
            $table->string('email')->unique();
            $table->string('fonction');
            $table->string('contact',30);
            $table->string('flotte',30);
            $table->string('fixe',30);
            $table->enum('statut', ['actif','inactif']);
            $table->enum('contrat', ['cdi','cdd']);
            $table->text('autres');
            $table->foreignId('entite_id') //Entite
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
