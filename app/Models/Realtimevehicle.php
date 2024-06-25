<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtimevehicle extends Model
{
    use HasFactory;

    protected $table = 'realtime_vehicle'; // Explicitly specify the correct table name

    protected $fillable = [
        'client',
        'vehicle_number',
        'slot',
        'gate',
    ];
}