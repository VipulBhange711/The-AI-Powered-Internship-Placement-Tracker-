<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');

            // 10th
            $table->string('tenth_board')->nullable();
            $table->decimal('tenth_percentage', 5, 2)->nullable();
            $table->integer('tenth_year')->nullable();

            // 12th
            $table->string('twelfth_board')->nullable();
            $table->decimal('twelfth_percentage', 5, 2)->nullable();
            $table->integer('twelfth_year')->nullable();

            // Graduation
            $table->string('graduation_university')->nullable();
            $table->decimal('graduation_percentage', 5, 2)->nullable();
            $table->integer('graduation_year')->nullable();

            // Diploma (optional)
            $table->decimal('diploma_percentage', 5, 2)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_education_details');
    }
};
