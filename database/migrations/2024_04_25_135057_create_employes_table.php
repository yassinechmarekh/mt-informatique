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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdUser')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('NomEmploye')->nullable();
            $table->string('PrenomEmploye')->nullable();
            $table->enum('GenreEmploye',['Male','Femme'])->nullable();
            $table->string('SalaireEmploye')->nullable();
            $table->string('RoleEmploye')->nullable();
            $table->string('EmailProfessionnelEmploye')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
