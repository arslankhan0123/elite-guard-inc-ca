<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_highlights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->unsignedTinyInteger('sort_order')->default(1); // 1, 2, or 3
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_highlights');
    }
};
