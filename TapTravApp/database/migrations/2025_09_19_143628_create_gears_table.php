<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gears', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->json('items')->nullable();
            $table->timestamps();

            // Optional: enforce link to users table
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gears');
    }
};
