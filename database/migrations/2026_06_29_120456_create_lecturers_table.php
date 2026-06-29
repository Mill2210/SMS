<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('department_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('staff_number')->unique();

            $table->string('first_name');

            $table->string('last_name');

            $table->string('email')->unique();

            $table->string('phone')->nullable();

            $table->string('qualification')->nullable();

            $table->string('photo')->nullable();

            $table->enum('status',[
                'Active',
                'Inactive'
            ])->default('Active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};