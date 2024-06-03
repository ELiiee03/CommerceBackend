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
        Schema::create('dealer', function (Blueprint $table) {
            $table->id('dealer_id');
            $table->string('dealer_name');
            $table->string('dealer_add');
            $table->string('dealer_no');
            $table->string('dealer_company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer');
    }
};
