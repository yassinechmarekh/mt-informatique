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
        Schema::create('details_descriptions', function (Blueprint $table) {
            $table->id();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_descriptions');
    }
};
