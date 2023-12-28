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
        Schema::create('trip_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_from');
            $table->foreign('trip_from')->references('id')->on('trips')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('trip_to');
            $table->foreign('trip_to')->references('id')->on('trips')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_locations');
    }
};
