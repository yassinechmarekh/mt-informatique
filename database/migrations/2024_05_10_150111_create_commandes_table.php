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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idproduit')->constrained('produits')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('idclient')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Prenom');
            $table->string('Nom');
            $table->string('Adresse');
            $table->string('ProduitTitre');
            $table->string('Prix');
            $table->string('Quantite');
            $table->string('Total');
            $table->string('Tel');
            $table->enum('status',['En Attend','Confirmée','Annulée'])->default('En Attend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
