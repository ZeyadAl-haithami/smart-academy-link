<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('studentID'); // Primary key
            $table->string('name');
            $table->integer('year');
            $table->foreignId('classID')->constrained('classes')->onDelete('cascade'); // Foreign key referencing classes table
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
