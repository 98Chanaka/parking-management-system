<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $checkrole = explode(',',$role);
        if(in_array('ssadmin',$checkrole)){
            return redirect('ssadmin/dashboard');
        }elseif(in_array('sadmin',$checkrole)){
            return redirect('sadmin/dashboard');
        }else{
            return redirect('security/dashboard');
        }
    }
}
