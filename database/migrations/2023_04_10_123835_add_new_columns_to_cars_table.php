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
            $table->string('carMake')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->integer('price')->nullable();
            $table->integer('motorSize')->nullable();
            $table->string('gear')->nullable();
            $table->string('color')->nullable();
            $table->string('license')->nullable();
            $table->string('fuel')->nullable();
            $table->string('used')->nullable();
            $table->string('customs')->nullable();
            $table->string('insurance')->nullable();
            $table->string('imagePath')->nullable();
           
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
