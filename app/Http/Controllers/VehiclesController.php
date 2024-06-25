<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function Vehicles(){
        return view("sadmin.vehicles");
    } //end method
}
