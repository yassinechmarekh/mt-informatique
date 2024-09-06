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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titre_min')->nullable();
            $table->string('slug')->nullable();
            $table->string('titre')->nullable();
            $table->string('imagePrincipale370x250px')->nullable();
            $table->string('imagePrincipale115x90px')->nullable();
            $table->text('introduction')->nullable();
            $table->string('sousTitre1')->nullable();
            $table->text('paragraph1')->nullable();
            $table->string('sousTitre2')->nullable();
            $table->text('paragraph2')->nullable();
            $table->string('sousTitre3')->nullable();
            $table->text('paragraph3')->nullable();
            $table->string('sousTitre4')->nullable();
            $table->text('paragraph4')->nullable();
            $table->string('sousTitre5')->nullable();
            $table->text('paragraph5')->nullable();
            $table->string('sousTitre6')->nullable();
            $table->text('paragraph6')->nullable();
            $table->string('imageSecondaire1')->nullable();
            $table->string('imageSecondaire2')->nullable();
            $table->text('conclusion')->nullable();
            $table->foreignId('IdTag')->constrained('blog_tags')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
