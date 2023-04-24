<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('progressions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('progressionable_id');
            $table->string('progressionable_type');
            // Ajout de l'index pour la colonne polymorphe
            $table->index(['progressionable_id', 'progressionable_type']);
            $table->foreignId('user_id')->constrained('users');
            $table->integer('pourcentage');
            $table->timestamps();
        });


    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progressions');
    }
};
