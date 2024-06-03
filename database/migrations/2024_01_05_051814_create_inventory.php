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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->integer('InStock');
            $table->integer('OnOrder');
            $table->integer('reserved');
            $table->timestamps();
        });
        Schema::table('inventory', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('dealer_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('option_id');
         
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicle');
            $table->foreign('dealer_id')->references('dealer_id')->on('dealer');
            $table->foreign('brand_id')->references('brand_id')->on('brand');
            $table->foreign('model_id')->references('model_id')->on('model');
            $table->foreign('option_id')->references('option_id')->on('option');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
