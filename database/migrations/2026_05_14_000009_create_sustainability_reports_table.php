<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sustainability_reports', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->year('year');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sustainability_reports');
    }
};
