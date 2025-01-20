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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('legal_name',50)->nullable();
            $table->string('display_name',50)->nullable();
            $table->string('company_url')->unique()->nullable();
            $table->string('company_qr_code')->unique()->nullable();
            $table->string('state',50)->nullable();
            $table->string('address',)->nullable();
            $table->string('company_logo')->nullable();
            $table->text('company_contact_number')->nullable();
            $table->string('company_contact_email',50)->unique()->nullable();
            $table->text('company_contact_phone')->unique()->nullable();
            $table->time('time_zone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
