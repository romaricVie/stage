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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('day',15);
            $table->string('month',15);
            $table->year('year');
            $table->string('image',100);
            $table->string('generation',100);
            $table->enum('etat', ['bon','hors_service']);
            $table->enum('disponibilite', ['libre','occupe']);
            $table->string('ram',15)->nullable();
            $table->string('disque_dur',15)->nullable();
            $table->string('processeur',15)->nullable();
            $table->string('couleur',15)->nullable();
            $table->string('marque',100)->nullable();
            $table->string('immatriculation',100)->nullable();
            $table->string('puissance',15)->nullable();
            $table->string('matiere',100)->nullable();
            $table->string('autres',200)->nullable();
            $table->foreignId('employe_id') // employe
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('categorie_id') //categorie
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('scategorie_id') //sous categorie
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('sscategorie_id') //sous sous categorie
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('entrepot_id') //Entrepot (site)
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('emplacement_id') //Emplacement
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('espace_id') //Espace
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
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
        Schema::dropIfExists('biens');
    }
};
