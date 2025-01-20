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
        Schema::create('driver_accident_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('no_accident_to_report',50);
            $table->date('date')->nullable();
            $table->string('description',256)->nullable();
            $table->integer('fatalities')->nullable();
            $table->integer('injuries')->nullable();
            $table->string('vehicle_type',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_accident_reviews');
    }
};
