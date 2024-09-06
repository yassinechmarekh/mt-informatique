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
        Schema::create('tag_categorie_produits', function (Blueprint $table) {
            $table->id();
            $table->string('Tag1')->nullable();
            $table->string('Tag2')->nullable();
            $table->string('Tag3')->nullable();
            $table->string('Tag4')->nullable();
            $table->string('Tag5')->nullable();
            $table->string('Tag6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_categorie_produits');
    }
};
