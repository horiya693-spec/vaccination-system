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
        Schema::create('childvaccination', function (Blueprint $table) {
          
    $table->unsignedBigInteger('child_id');
    $table->foreign('child_id')
          ->references('id')
          ->on('children')
          ->cascadeOnDelete();

    $table->unsignedBigInteger('vaccination_id');
    $table->foreign('vaccination_id')
          ->references('id')
          ->on('vaccinations')
          ->cascadeOnDelete();

    $table->unsignedBigInteger('hospital_id')->nullable();
    $table->foreign('hospital_id')
          ->references('id')
          ->on('hospitals')
          ->nullOnDelete();

    $table->date('vaccination_date')->nullable();

    $table->string('status')->default('Pending');

    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childvaccination');
    }
};
