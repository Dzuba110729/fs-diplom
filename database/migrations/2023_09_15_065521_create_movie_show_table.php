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
        Schema::create('movie_show', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hall_id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('movie_show_duration');
            $table->string('film_name');
            $table->string('start_day');
            $table->string('start_time');
            $table->json('ordered');
            $table->timestamps();
            $table->foreign('hall_id')->references('id')->on('hall');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_show');
    }
};
