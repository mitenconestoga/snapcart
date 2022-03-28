<?php

namespace App\Http\Controllers;
use App\Models\addtocart;
use Illuminate\Http\Request;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class AddtocartController extends Controller
{

  public function removecart($id)
  {
      $data=addtocart::find($id);
      $data->delete();
      return redirect('cart');
  }

    public function addcart($id){

          if(!Session::has('user'))
            return view('login');

            $data = addtocart::where('photo_id' , $id)
            ->where('u_id' ,session()->get('uid'))
            ->exists();

            if(!$data)
            {
        $addtocart=new addtocart;
        $value = session()->get('uid');
              $addtocart->u_id=$value;
              $addtocart->photo_id=$id;
              $addtocart->save();
              $count=session()->get('cartcount');
              session()->put('cartcount', $count+1);
              Toastr::success("Added in cart");
              return redirect('/');
            }
            else
            {
              //session()->flash('already', 'Task was successful!');
              Toastr::error("Already added in cart");

              return redirect('/');
            }
    }

    public function getcartlist()
    {

        $value = session()->get('uid');
        $data = addtocart::join('users', 'users.u_id', '=', 'addtocarts.u_id')
              		->join('photos', 'photos.photo_id', '=', 'addtocarts.photo_id')
                      ->join('photo_category', 'photo_category.category_id', '=', 'photos.category_id')
                      ->where('users.u_id', $value)
              		->get(['addtocarts.addtocart_id','photos.filepath','photos.price', 'photo_category.category_name']);

                        session()->put('cartcount',count($data));

                      //return $data;
                     return view('cart',['collection'=>$data]);


    }
}
