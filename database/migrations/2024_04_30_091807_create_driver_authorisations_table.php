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
        Schema::create('driver_authorisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('application_investigation',256)->nullable();
            $table->string('additional_info',256)->nullable();
            $table->string('print_name',100)->nullable();
            $table->string('employee_signature',256)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_authorisations');
    }
};
