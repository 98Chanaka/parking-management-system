<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerStatusController extends Controller
{
    public function ServerStatusSsadmin(){
        return view("ssadmin.server_status_ssadmin");
    } //end method

    public function ServerStatusSecurity(){
        return view("security.server_status_security");
    } //end method

    public function ServerStatusSadmin(){
        return view("sadmin.server_status_sadmin");
    } //end method
}
