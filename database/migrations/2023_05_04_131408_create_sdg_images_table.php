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
        Schema::create('sdg_images', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title');
            $table->unsignedBigInteger('sustainability_id');
            $table->foreign('sustainability_id')->references('id')->on('sustainabilities')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sdg_images');
    }
};
