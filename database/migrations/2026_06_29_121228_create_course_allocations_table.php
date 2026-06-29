<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_allocations', function (Blueprint $table) {

            $table->id();

            $table->foreignId('lecturer_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('course_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('academic_year');

            $table->enum('semester',[
                'Semester I',
                'Semester II'
            ]);

            $table->timestamps();

            $table->unique([
                'lecturer_id',
                'course_id',
                'academic_year',
                'semester'
            ]);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_allocations');
    }
};