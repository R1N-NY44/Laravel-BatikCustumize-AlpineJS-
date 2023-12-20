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
        Schema::create('custom_batiks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('design');
            $table->unsignedBigInteger('motive');
            $table->unsignedBigInteger('material');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('design')->references('id')->on('designs')->onDelete('cascade');
            $table->foreign('motive')->references('id')->on('motives')->onDelete('cascade');
            $table->foreign('material')->references('id')->on('materials')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_batiks');
    }
};
