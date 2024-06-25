<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingMapController extends Controller
{
    public function ParkingMap(){
        return view("ssadmin.parking_map_ssadmin");
    } //end method
}
