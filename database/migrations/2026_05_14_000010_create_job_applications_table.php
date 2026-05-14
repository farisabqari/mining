<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained()->cascadeOnDelete();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->text('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('education')->nullable();
            $table->string('university')->nullable();
            $table->string('gpa')->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('current_position')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('diploma_file')->nullable();
            $table->string('ktp_file')->nullable();
            $table->string('certificate_file')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
