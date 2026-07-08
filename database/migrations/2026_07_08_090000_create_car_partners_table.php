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
        Schema::create('car_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('car_type');
            $table->integer('capacity');
            $table->string('price');
            $table->string('phone_number');
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_available')->default(true);
            $table->float('rating')->default(4.8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_partners');
    }
};
