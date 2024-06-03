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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->integer('qty');
            $table->decimal('unit_price', 10,2);
            $table->timestamps();
        });
        // create foreign key constraints for order_item table
        Schema::table('order_item', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('option_id');
         
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicle');
            $table->foreign('option_id')->references('option_id')->on('option');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
