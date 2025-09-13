<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('climbs', function (Blueprint $table) {
            $table->id(); // Primary key for climbs

            $table->unsignedBigInteger('user_id'); // BIGINT unsigned, not null

            $table->string('title', 100)->nullable();
            $table->string('difficulty', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->text('description')->nullable();
            $table->string('image_url', 255)->nullable();

            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();

            // Active foreign key
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('climbs');
    }
};

