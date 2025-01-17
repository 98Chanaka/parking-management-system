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
        Schema::create('manual_entry', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('slot')->nullable();
            $table->string('gate')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manual_entry');
    }
};
