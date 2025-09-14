<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('difficulty');
            $table->string('duration')->nullable();   // e.g. "3 Days Hike"
            $table->string('image')->nullable();      // image path
            $table->text('description')->nullable();  // trip details
            $table->boolean('is_popular')->default(false); // mark as popular
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
