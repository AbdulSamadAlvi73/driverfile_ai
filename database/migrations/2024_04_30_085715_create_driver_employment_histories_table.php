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
        Schema::create('driver_employment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('currently_working',50)->nullable();
            $table->string('recent_job')->nullable();
            $table->string('company',50)->nullable();
            $table->string('supervisor',50)->nullable();
            $table->integer('supervisor_phone')->nullable();
            $table->integer('salary')->nullable();
            $table->string('street_address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('position_held',200)->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('reason_for_leaving',256)->nullable();
            $table->string('hauling_what',200)->nullable();
            $table->integer('number_of_month')->nullable();
            $table->string('equipment',100)->nullable();
            $table->string('FMCSRs',50)->nullable();
            $table->string('CFR',50)->nullable();
            $table->string('des_of_gap')->nullable();
            $table->date('from_date_gap')->nullable();
            $table->date('to_date_gap')->nullable();
            $table->string('contact_current_emp',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_employment_histories');
    }
};
