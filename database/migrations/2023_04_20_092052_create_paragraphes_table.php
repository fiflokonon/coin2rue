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
        Schema::create('paragraphes', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->integer('ordre');
            $table->string('media_link')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('lecon_id');
            $table->boolean('statut')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paragraphes');
    }
};
