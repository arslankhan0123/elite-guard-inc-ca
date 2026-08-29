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
        Schema::create('services', function (Blueprint $col) {
            $col->id();
            $col->string('name');
            $col->string('slug')->unique();
            $col->text('short_description')->nullable();
            $col->longText('long_description')->nullable();
            $col->string('feature_image')->nullable();
            $col->enum('status', ['active', 'inactive'])->default('active');
            $col->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
