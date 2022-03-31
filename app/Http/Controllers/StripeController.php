<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class StripeController extends Controller
{
    //

    public function stripe(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "cad",
                "source" => $request->stripeToken,
                "description" => "Test payment from snapcart.com."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
