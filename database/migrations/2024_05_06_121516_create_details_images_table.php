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
        Schema::create('details_images', function (Blueprint $table) {
            $table->id();
            $table->string('smallImage1')->nullable();
            $table->string('zoomImage1')->nullable();
            $table->string('smallImage2')->nullable();
            $table->string('zoomImage2')->nullable();
            $table->string('smallImage3')->nullable();
            $table->string('zoomImage3')->nullable();
            $table->string('smallImage4')->nullable();
            $table->string('zoomImage4')->nullable();
            $table->string('smallImage5')->nullable();
            $table->string('zoomImage5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_images');
    }
};
