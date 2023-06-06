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
        Schema::create('lecon_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecon_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('valide')->default(false);
            $table->timestamps();
            $table->foreign('lecon_id')->references('id')->on('lecons')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecon_users');
    }
};
