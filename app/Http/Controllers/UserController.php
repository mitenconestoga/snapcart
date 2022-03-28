<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{

    public function signup(Request $request){


        $request->validate(

            [
                    'email' =>'required | email|unique:users,email',
                    'password'=>'required | min:6 |confirmed',
                    'contact'=>'required| regex:/[0-1][0-9]{9}/'
            ]
            );

              $user=new User;
              $user->contact_no=$request->contact;
              $user->email=$request->email;
              $user->password=$request->password;

              $user->save();
              //$request->session()->put('user',$request->email);
              return redirect('login');
      }

    public function login(Request $request){

        $request->validate(

            [
                    'email' =>'required |email',
                    'password'=>'required'
            ]
            );
            $data = User::where('email' , $request->email)
            ->where('password' ,$request->password)
            ->exists();

            if($data)
            {
                $dataa = User::where('email' , $request->email)->get();
                $request->session()->put('user',$request->email);
                $request->session()->put('uid',$dataa[0]['u_id']);

                 return redirect('/');
            }
            else{
                Toastr::error("Email and Password is not matching");
                return back();

            }
            }
      }

