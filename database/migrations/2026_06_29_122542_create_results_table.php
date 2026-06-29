<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('course_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->decimal('coursework',5,2);

            $table->decimal('exam',5,2);

            $table->decimal('total',5,2);

            $table->string('grade');

            $table->decimal('grade_point',3,2);

            $table->string('remark');

            $table->string('academic_year');

            $table->enum('semester',[
                'Semester I',
                'Semester II'
            ]);

            $table->timestamps();

            $table->unique([
                'student_id',
                'course_id',
                'academic_year',
                'semester'
            ]);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};