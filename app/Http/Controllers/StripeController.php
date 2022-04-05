<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\payment;
use App\Models\addtocart;
use App\Models\Photos;

use Brian2694\Toastr\Facades\Toastr;

class StripeController extends Controller
{

    public function stripe(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => session()->get('price') * 100,
                "currency" => "cad",
                "source" => $request->stripeToken,
                "description" => "Test payment from snapcart.com."
        ]);

        if(session()->get('list'))
        {
          foreach(session()->get('list') as $photo){
        $payment=new payment;
        $value = $photo['u_id'];
        $photo_id=$photo['photo_id'];
              $payment->u_id=$value;
              $payment->photo_id=$photo_id;
              $payment->stripe_token=$request->stripeToken;
              $payment->totalprice=$photo['price'];
              $payment->save();
                $data=addtocart::where('photo_id','=',$photo_id)
                                ->where('u_id','=',$value)->delete();
               $photo=Photos::find($photo_id);
                $photo->delete();

          }
              //return redirect('/');
             // Session::flash('success', 'Payment successful!');
             Toastr::success("Payment successful!");
             session()->forget('list');
        return redirect('/');

        }
        else{
          $payment=new payment;
          $value = session()->get('uid');
          $photo_id=session()->get('photo_id');
                $payment->u_id=$value;
                $payment->photo_id=$photo_id;
                $payment->stripe_token=$request->stripeToken;
                $payment->totalprice=session()->get('price');
                $payment->save();
                Toastr::success("Payment successful!");
                  $data=addtocart::where('photo_id','=',$photo_id)
                                  ->where('u_id','=',$value)->delete();
                 $photo=Photos::find($photo_id);
                  $photo->delete();
                //return redirect('/');
               // Session::flash('success', 'Payment successful!');

          return redirect('/');
        }
    }
}
