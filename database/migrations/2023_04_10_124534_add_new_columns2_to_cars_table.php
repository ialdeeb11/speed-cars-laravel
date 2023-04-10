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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('carMake');
            $table->string('model');
            $table->integer('year');
            $table->integer('price');
            $table->string('gear');
            $table->string('color');
            $table->string('license');
            $table->string('fuel');
            $table->string('conndition');
            $table->string('customs');
            $table->string('insurance');
            $table->string('image_path_1');
            $table->string('image_path_2');
            $table->string('image_path_3');
            $table->string('image_path_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            //
        });
    }
};
