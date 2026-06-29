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
    Schema::create('courses', function (Blueprint $table) {
        $table->id();

        $table->foreignId('program_id')->constrained()->cascadeOnDelete();

        $table->string('course_code')->unique();
        $table->string('course_name');

        $table->integer('year_of_study');

        $table->enum('semester', [
            'Semester I',
            'Semester II'
        ]);

        $table->integer('credit_hours');

        $table->text('description')->nullable();

        $table->enum('status', [
            'Active',
            'Inactive'
        ])->default('Active');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
