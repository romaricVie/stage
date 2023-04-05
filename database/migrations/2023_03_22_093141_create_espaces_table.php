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
        Schema::create('espaces', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('description',200)->nullable();
            $table->foreignId('entrepot_id') //entrepot
                   ->constrained()
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
            $table->foreignId('emplacement_id') //emplacement
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
        Schema::dropIfExists('espaces');
    }
};
