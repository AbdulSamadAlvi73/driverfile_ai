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
        Schema::create('driver_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('job_applied_for',30);
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->text('social_security_no');
            $table->date('date_of_birth');
            $table->text('mobile_no');
            $table->text('other_mobile_no');
            $table->string('email_address',50)->unique();
            $table->string('present_address',256);
            $table->text('phone_no');
            $table->string('city',50);
            $table->string('state',50);
            $table->integer('zip');
            $table->string('country',50);
            $table->string('yrs_of_this_address',256);
            $table->string('status')->default("Processing");
            $table->date('date_applied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_applications');
    }
};
