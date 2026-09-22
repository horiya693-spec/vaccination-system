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
        Schema::create('appointment', function (Blueprint $table) {

            $table->id();


           // Child Relationship
    $table->unsignedBigInteger('child_id');
    $table->foreign('child_id')->references('id')->on('children')->cascadeOnDelete();
    
   
    $table->unsignedBigInteger('vaccination_id');
    $table->foreign('vaccination_id')->references('id')->on('vaccinations')->cascadeOnDelete();
    
   
    $table->unsignedBigInteger('hospital_id');
    $table->foreign('hospital_id')->references('id')->on('hospitals')->cascadeOnDelete();
    
    // Booking Details
    $table->date('appointment_date')->nullable(); // Made nullable so it can sit as "Pending" before booking
    $table->string('status')->default('Pending'); // Automatically starts as Pending
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
