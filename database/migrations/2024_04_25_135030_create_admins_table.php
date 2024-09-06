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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdUser')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('NomAdmin')->nullable();
            $table->string('PrenomAdmin')->nullable();
            $table->enum('GenreAdmin',['Male','Femme'])->nullable();
            $table->integer('AgeAdmin')->nullable();
            $table->string('RoleAdmin')->nullable();
            $table->string('EmailProfessionnelAdmin')->nullable();
            $table->string('TelAdmin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
