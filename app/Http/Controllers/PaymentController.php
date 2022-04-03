<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function payment(){

           if (Str::contains(url()->previous(), 'cart'))
           {
            return view('paymentform');
           }
           else
           {
            session()->forget('list');
            return view('paymentform');
           }


}
}
