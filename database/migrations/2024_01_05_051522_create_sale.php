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
        Schema::create('sale', function (Blueprint $table) {
            $table->id('sale_id');
            $table->date('sale_date');
            $table->timestamps();
        });
        // create foreign key constraints for sale table
        Schema::table('sale', function (Blueprint $table) {
            $table->unsignedBigInteger('dealer_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('vehicle_id');
         
            $table->foreign('dealer_id')->references('dealer_id')->on('dealer');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicle');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale');
    }
};
