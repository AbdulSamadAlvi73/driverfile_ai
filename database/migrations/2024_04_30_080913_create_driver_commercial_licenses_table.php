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
        Schema::create('driver_commercial_licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('name',30)->nullable();
            $table->string('other_name',30)->nullable();
            $table->string('cdl_type')->default('None')->nullable();
            $table->string('endorsement',30)->nullable();
            $table->date('license_expiration_date')->nullable();
            $table->boolean('air_brake_restriction')->default(0);
            $table->boolean('transmission_restriction')->default(0);
            // $table->boolean('medicaldot')->default(0);
            $table->string('years_of_cdl_exp',100)->nullable();
            $table->string('current_driver',50)->nullable();
            $table->string('state',50)->nullable();
            // $table->string('current_dot_medical_card',30)->nullable();
            $table->boolean('current_dot_medical_card')->default(0);
            $table->date('dot_medical_card_exp_date')->nullable();
            $table->string('dry_van',50)->nullable();
            $table->string('doubles',50)->nullable();
            $table->string('flatbed',50)->nullable();
            $table->string('tanker',50)->nullable();
            $table->string('reefer',50)->nullable();
            $table->string('switching',50)->nullable();
            $table->string('dump',50)->nullable();
            $table->string('cdl_B',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_commercial_licenses');
    }
};
