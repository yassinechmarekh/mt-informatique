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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->string('ParametreStatus')->nullable();
            $table->string('ImagePrincipale')->nullable();
            $table->string('ImageDashboard')->nullable();
            $table->string('AncienPrix')->nullable();
            $table->string('NouveauPrix')->nullable();
            $table->text('DescriptionModal')->nullable();
            $table->text('DescriptionPlus')->nullable();
            $table->foreignId('IdDetails')->constrained('details_descriptions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('IdTags')->constrained('tag_produits')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('IdImages')->constrained('details_images')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('IdCategorie')->constrained('categorie_produits')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
