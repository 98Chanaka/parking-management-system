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
        Schema::create('realtime_vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('vehicle_number');
            $table->enum('slot',['A','E','F'])->default('A');
            $table->enum('gate',['in','out'])->default('in');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realtime_vehicle');
    }
};
