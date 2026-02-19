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
      Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');

    $table->string('roll_number')->unique();
    $table->string('enrollment_number')->nullable();
    $table->string('department');
    $table->string('course'); 
    $table->integer('semester');
    $table->integer('passing_year');

    $table->decimal('current_cgpa', 4, 2)->nullable();
    $table->integer('active_backlogs')->default(0);

    $table->boolean('is_placement_eligible')->default(true);
    $table->string('placement_status')->default('Not Placed');

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
