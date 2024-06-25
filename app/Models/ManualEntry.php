<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualEntry extends Model
{
    use HasFactory;

    protected $table = 'manual_entry';

    protected $fillable = [
        'client',
        'vehicle_number',
        'slot',
        'gate',
    ];
}
