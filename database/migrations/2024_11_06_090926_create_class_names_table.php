<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id('classID'); // Primary key
            $table->string('classname');
            $table->string('year');
            $table->timestamps();
        });

        // Pivot table for many-to-many relationship between teachers and classes
        Schema::create('class_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacherID')->constrained('teachers')->onDelete('cascade');
            $table->foreignId('classID')->constrained('classes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_teacher');
        Schema::dropIfExists('classes');
    }
};
