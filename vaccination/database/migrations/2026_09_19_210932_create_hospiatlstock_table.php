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
        Schema::create('hospiatlstock', function (Blueprint $table) {
           
    $table->unsignedBigInteger('hospital_id');
    $table->foreign('hospital_id')
          ->references('id')
          ->on('hospitals')
          ->cascadeOnDelete();

    $table->unsignedBigInteger('vaccination_id');
    $table->foreign('vaccination_id')
          ->references('id')
          ->on('vaccinations')
          ->cascadeOnDelete();

    $table->string('status')->default('Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospiatlstock');
    }
};
