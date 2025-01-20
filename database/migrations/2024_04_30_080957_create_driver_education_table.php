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
        Schema::create('driver_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('school_name_and_location_of_school',100)->nullable();
            $table->string('school_years_attended',50)->nullable();
            $table->string('school_diploma_certificate',100)->nullable();
            $table->string('college_name_and_location_of_school',100)->nullable();
            $table->string('college_years_attended',50)->nullable();
            $table->string('college_diploma_certificate',100)->nullable();
            $table->string('business_name_and_location_of_school',100)->nullable();
            $table->string('business_years_attended',50)->nullable();
            $table->string('business_diploma_certificate',100)->nullable();
            $table->string('special_courses',256)->nullable();
            $table->string('driving_awards',256)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_education');
    }
};
