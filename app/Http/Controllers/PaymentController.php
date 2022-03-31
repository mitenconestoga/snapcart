<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($id){

            session()->put('price',$id);
            return view('paymentform');
    }
}
