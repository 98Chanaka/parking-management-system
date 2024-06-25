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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('available_classes')->nullable();
            $table->enum('register',['yes','no'])->default('yes');
            $table->enum('payment',['yes','no'])->default('yes');
            $table->enum('active_status',['yes','no'])->default('yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
