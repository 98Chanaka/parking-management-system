<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
     //settings
     public function Settings(){
        return view("sadmin.settings");
    } //end method

    
}
