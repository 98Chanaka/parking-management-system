<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSlot extends Model
{
    use HasFactory;

    protected $table = 'parking_slot';

    protected $fillable = [
        'client',
        'Spot_ID',
        'Status',
        'vehicle_category',
        'vehicle_class',
        'availability',
    ];

    protected $casts = [
        'availability' => 'boolean', // Cast 'Availability' to boolean
   ];

    // Define any other relationships or methods here
}
