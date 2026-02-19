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
        Schema::create('student_professional_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');

            $table->text('technical_skills')->nullable();
            $table->text('soft_skills')->nullable();
            $table->text('certifications')->nullable();
            $table->text('projects')->nullable();

            $table->string('resume')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('github_profile')->nullable();
            $table->string('portfolio_link')->nullable();

            $table->string('current_internship_company')->nullable();
            $table->string('internship_status')->nullable();
            $table->date('internship_start_date')->nullable();
            $table->date('internship_end_date')->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_professional_details');
    }
};
