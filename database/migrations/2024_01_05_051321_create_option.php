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
        Schema::create('option', function (Blueprint $table) {
            $table->id('option_id');
            $table->string('option_name');
            $table->string('option_type');
            $table->string('style');
            $table->string('color');
            $table->string('engine');
            $table->string('transmission');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option');
    }
};
