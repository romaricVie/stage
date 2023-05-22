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
            $table->bigInteger('price')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->year('year')->nullable();
            $table->string('image')->nullable();
            $table->string('generation')->nullable();
            $table->enum('etat', ['bon','hors_service']);
            $table->enum('disponibilite', ['libre','occupe'])->default('libre');
            $table->enum('type_qty', ['bien_unique','groupe_bien'])->default('bien_unique');
            $table->bigInteger('quantite')->nullable();
            $table->string('etiquette')->unique();
            $table->string('ram')->nullable();
            $table->string('disque_dur')->nullable();
            $table->string('processeur')->nullable();
            $table->string('couleur')->nullable();
            $table->string('marque')->nullable();
            $table->string('longueur')->nullable();
            $table->string('largeur')->nullable();
            $table->string('hauteur')->nullable();
            $table->string('nbre_battant')->nullable();
            $table->string('immatriculation')->nullable();
            $table->string('puissance')->nullable();
            $table->string('matiere')->nullable();
            $table->string('poids')->nullable();//poids
            $table->string('autres')->nullable();
            $table->string('code')->nullable();
            $table->string('place')->nullable();
            $table->string('energie')->nullable();
            $table->string('fournisseur_name')->nullable();
            $table->string('fournisseur_tel')->nullable();
            $table->enum('type_bien', ['bien_materiel','bien_immateriel'])->default('bien_materiel');
            $table->string('expiration')->nullable();
            $table->foreignId('user_id') // admin 
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('employe_id') // employe 24
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('categorie_id') //categorie
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('scategorie_id') //sous categorie
                   ->nullable()
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('sscategorie_id') //sous sous categorie
                   ->nullable()
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
            $table->timestamps();  //31
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
