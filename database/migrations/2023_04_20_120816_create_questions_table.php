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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('commentaire')->nullable();
            $table->foreignId('quiz_id')->constrained('quizes');
            $table->boolean('true_or_false')->default(0);
            $table->boolean('multiple_answer')->default(0);
            $table->boolean('one_answer')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('statut')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
