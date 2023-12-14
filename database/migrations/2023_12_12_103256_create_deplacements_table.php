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
        Schema::create('deplacements', function (Blueprint $table) {
             $table->id();
             $table->string('description');
             $table->string('motif_deplacement');
             $table->foreignId('bien_id') // Bien id
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('entrepot_id') //Entrepot (site)
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('emplacement_id') //Emplacement
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('espace_id') //Espace
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('entite_id') //Entite
                   ->nullable()
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
        Schema::dropIfExists('deplacements');
    }
};
