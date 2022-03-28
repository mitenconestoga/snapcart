<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signUp;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddtocartController;

Route::get('/signup', function () {
    if(Session::has('user'))
    return redirect('/');
    else
    return view('sign-up');
});
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
Route::get('/cart',[AddtocartController::class,'getcartlist']);
Route::get('cart/{id}',[AddtocartController::class,'addcart']);
Route::get('cartremove/{id}',[AddtocartController::class,'removecart']);

Route::get('/{id?}',[PhotosController::class,'getphoto']);
Route::get('photodetail/{photo_id}',[PhotosController::class,'photodetail']);
Route::post('/login',[UserController::class,'login']);
Route::post('/signup',[UserController::class,'signup']);


?>