<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function PaymentSadmin(){
        return view("sadmin.payment_sadmin");
    } //end method

    public function PaymentSecurity(){
        return view("security.payment_security  ");
    } //end metho
}
