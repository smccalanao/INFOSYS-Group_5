<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClimbsTable extends Migration
{
    public function up()
    {
        Schema::create('climbs', function (Blueprint $table) {
            $table->id(); // INT UNSIGNED AUTO_INCREMENT
            $table->unsignedBigInteger('user_id')->nullable(); // FK -> users.id (nullable)
            $table->string('title', 100)->nullable();
            $table->string('difficulty', 50)->nullable();
            $table->string('address', 150)->nullable(); // <-- added
            $table->text('description')->nullable();
            $table->string('image_url', 255)->nullable();

            // Use explicit timestamps to mirror your DB defaults
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('climbs');
    }
}