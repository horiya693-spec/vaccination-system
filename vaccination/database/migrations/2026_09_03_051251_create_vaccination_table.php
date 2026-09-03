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
        Schema::create('vaccination', function (Blueprint $table) {
            $table->id();
            $table->string('Child Name');
            $table->string('Father Name');
            $table->string('Mother Name');
            $table->string('Phone Number');
            $table->string('Child Gender');
            $table->date("DOB");
            $table->string('Address');
            $table->unsignedBigInteger('Parent_Id');
            $table->foreign('Parent_Id')->references('id')->on('users')->cascadeOnDelete();






            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination');
    }
};
