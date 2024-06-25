<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingSlotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_slot', function (Blueprint $table) {
            $table->id(); // This automatically sets the column as primary key
            $table->string('client', 50);
            $table->string('Sport_ID', 10);
            $table->string('Status');
            $table->enum('vehicle_category', ['long', 'light']);
            $table->enum('vehicle_class', ['A', 'E', 'F']);
            $table->enum('Availability', ['yes', 'no']);
            $table->timestamps();

            // No need to define primary key again as id() sets it
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_slot');
    }
}
