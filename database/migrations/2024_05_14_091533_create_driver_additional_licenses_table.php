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
        Schema::create('driver_additional_licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('state',50)->nullable();
            $table->integer('licenses_no')->nullable();
            $table->string('class',50)->nullable();
            $table->string('endorsement',50)->nullable();
            $table->date('exp_date')->nullable();
            $table->string('any_licenses',50)->nullable();
            $table->date('date_suspended_1')->nullable();
            $table->string('details_1',256)->nullable();
            $table->date('date_suspended_2')->nullable();
            $table->string('details_2',256)->nullable();
            $table->date('date_suspended_3')->nullable();
            $table->string('details_3',256)->nullable();
            $table->string('convicted_for_driving',50)->nullable();
            $table->date('date_of_charge_1')->nullable();
            $table->string('convicted_details_1',100)->nullable();
            $table->date('date_of_charge_2')->nullable();
            $table->string('convicted_details_2',100)->nullable();
            $table->date('date_of_charge_3')->nullable();
            $table->string('convicted_details_3',100)->nullable();
            $table->string('alcohol_testing_rules',50)->nullable();
            $table->string('completed_duty_requirement',50)->nullable();
            $table->string('convicted_of_felony',50)->nullable();
            $table->string('des_of_offence_1',256)->nullable();
            $table->string('des_of_offence_2',256)->nullable();
            $table->date('date_of_convicted_1')->nullable();
            $table->date('date_of_convicted_2')->nullable();
            $table->string('country_city_state_of_convicted_1',100)->nullable();
            $table->string('country_city_state_of_convicted_2',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_additional_licenses');
    }
};
