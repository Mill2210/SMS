<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            $table->string('admission_number')->unique();

            $table->foreignId('program_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');

            $table->enum('gender', [
                'Male',
                'Female'
            ]);

            $table->date('date_of_birth')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->text('address')->nullable();

            $table->year('admission_year');

            $table->enum('status', [
                'Active',
                'Graduated',
                'Deferred',
                'Inactive'
            ])->default('Active');

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};