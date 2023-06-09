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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('price');
            $table->enum('etat', ['bon', 'hors_service']);
            $table->string('maintenancier',50);
            $table->string('contact_maintenancier',30);
            $table->text('description_panne');
            $table->string('day',15);
            $table->string('month',15);
            $table->year('year');
            $table->string('etiquette');
            $table->foreignId('bien_id') // Bien id
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
        Schema::dropIfExists('reparations');
    }
};
