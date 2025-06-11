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
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('class_section')->nullable();
            $table->string('student_father_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender',10)->nullable();
            $table->string('blood_group',10)->nullable();
            $table->string('mobile')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('student_image')->nullable();            
            $table->boolean('terms_conditions')->nullable();
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
