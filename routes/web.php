<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signUp;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\StripeController;


Route::get('/sign-up', function () {
    if(Session::has('user'))
    return redirect('/');
    else
    return view('sign-up');
});
// Route::get('home', function () {
//     return view('home');
//  });
Route::get('/login', function () {
    if(Session::has('user'))
   return redirect('/');
    else
    return view('login');
});
Route::get('/logout', function () {
    session()->forget('user');
    session()->forget('uid');
    session()->put('cartcount',0);
    return view('login');
});

Route::get('payment',[PaymentController::class,'payment']);

Route::get('/cart',[AddtocartController::class,'getcartlist']);
Route::get('cart/{id}',[AddtocartController::class,'addcart']);
Route::get('cartremove/{id}',[AddtocartController::class,'removecart']);

Route::get('/photos/{id?}',[PhotosController::class,'getphoto']);
Route::get('/{id?}',[PhotosController::class,'gethomephotos']);

Route::get('photodetail/{photo_id}',[PhotosController::class,'photodetail']);
Route::post('/login',[UserController::class,'login']);
Route::post('/signup',[UserController::class,'signup']);
Route::post('payment', [StripeController::class, 'stripe']);

?>
