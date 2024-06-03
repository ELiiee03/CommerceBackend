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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id('vehicle_id');
            $table->timestamps();
        });
        Schema::table('vehicle', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('dealer_id');
         
            $table->foreign('brand_id')->references('brand_id')->on('brand');
            $table->foreign('model_id')->references('model_id')->on('model');
            $table->foreign('option_id')->references('option_id')->on('option');
            $table->foreign('dealer_id')->references('dealer_id')->on('dealer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
