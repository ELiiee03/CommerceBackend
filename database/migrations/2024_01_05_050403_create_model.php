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
        Schema::create('model', function (Blueprint $table) {
            $table->id('model_id');
            $table->string('model_name');
            $table->integer('model_year');
            $table->timestamps();
        });
        // create foreign key constraints for model table
        Schema::table('model', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id');

            $table->foreign('brand_id')->references('brand_id')->on('brand');
        });
        // Schema::table('model', function (Blueprint $table) {
        //     $table->foreignId('brand_id')->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model');
    }
};
