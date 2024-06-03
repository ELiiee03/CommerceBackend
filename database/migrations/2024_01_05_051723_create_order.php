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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->date('order_date');
            $table->string('order_status');
            $table->decimal('total_ammount', 10, 2);
            $table->timestamps();
        });
        Schema::table('order', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('sale_id');
         
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('order_item_id')->references('order_item_id')->on('order_item');
            $table->foreign('sale_id')->references('sale_id')->on('sale');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
