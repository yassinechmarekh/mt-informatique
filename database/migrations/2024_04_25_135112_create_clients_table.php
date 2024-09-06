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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdUser')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('NomClient')->nullable();
            $table->string('PrenomClient')->nullable();
            $table->string('VilleClient')->nullable();
            $table->string('AdresseClient')->nullable();
            $table->string('TelClient')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
