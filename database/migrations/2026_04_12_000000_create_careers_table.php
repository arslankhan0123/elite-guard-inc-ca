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
        Schema::create('careers', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('title');
            $blueprint->string('slug')->unique();
            $blueprint->string('job_type')->nullable(); // e.g. Full-time, Part-time
            $blueprint->string('category')->nullable(); // e.g. On-site, Remote
            $blueprint->string('salary')->nullable();
            $blueprint->string('salary_unit')->default('week');
            $blueprint->string('location')->nullable();
            $blueprint->text('short_description')->nullable();
            $blueprint->longText('description')->nullable();
            $blueprint->string('feature_image')->nullable();
            $blueprint->boolean('is_urgent')->default(false);
            $blueprint->enum('status', ['active', 'inactive'])->default('active');
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
