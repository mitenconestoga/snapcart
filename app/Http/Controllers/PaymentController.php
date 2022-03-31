<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($id){

       return urldecode($id);
        return view('paymentform');
    }
}
