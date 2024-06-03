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
        Schema::create('supplies', function (Blueprint $table) {
            $table->id('supplies_id');
            $table->integer('qty');
            $table->decimal('unit_cost', 10, 2);
            $table->timestamps();
        });
        // create foreign key constraints for supplies table
        Schema::table('supplies', function (Blueprint $table) {
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('port_id');
            $table->unsignedBigInteger('model_id');
         
            $table->foreign('supplier_id')->references('supplier_id')->on('supplier');
            $table->foreign('port_id')->references('port_id')->on('port');
            $table->foreign('model_id')->references('model_id')->on('model');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplies');
    }
};
