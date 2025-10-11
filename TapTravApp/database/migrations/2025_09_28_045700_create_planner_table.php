<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
  Schema::create('planner', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('destination');
    $table->date('start_date');
    $table->date('end_date');
    $table->text('companions')->nullable();
    $table->text('gear')->nullable();
    $table->text('notes')->nullable();
    $table->timestamps();
});

}

public function down()
{
    Schema::dropIfExists('planner');
}};

