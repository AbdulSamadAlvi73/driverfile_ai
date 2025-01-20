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
        Schema::create('driver_traffic_convictions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('driver_applications');
            $table->string('no_traffic_conviction',50);
            $table->string('location',100)->nullable();
            $table->date('date')->nullable();
            $table->integer('charges')->nullable();
            $table->integer('penalty')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_traffic_convictions');
    }
};
