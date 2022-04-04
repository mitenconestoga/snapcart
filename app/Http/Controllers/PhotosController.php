<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
    function getPhoto($id=null)
    {
        if(!empty($id))
        {
            if(session()->has('uid'))
            {

            $id= base64_decode($id);
            session()->put('photoid',$id);
            $photo= Photos::select('photos.*','addtocarts.u_id as uid')
            ->leftJoin('addtocarts', 'photos.photo_id', '=', 'addtocarts.photo_id')
            ->where('photos.category_id','=',$id)
            ->get();

            }
            else
            {
                $id= base64_decode($id);
                  $photo=Photos::where('category_id','=',$id)->get();

            }
        }
        else
        {

            if(session()->has('uid'))
            {
        $photo= Photos::select('photos.*','addtocarts.u_id as uid')
        ->leftJoin('addtocarts', 'photos.photo_id', '=', 'addtocarts.photo_id')
        ->get();
                    $count=0;
        foreach($photo as $data){
            if($data['uid']==session()->get('uid'))
             $count=$count+1;
                }
                session()->put('cartcount',$count);

            }
            else{

                $photo= Photos::all();


            }
        }
        return view('index',['collection'=>$photo]);

    }

    function gethomephotos()
    {
        $photo= Photos::orderBy('photo_id', 'DESC')->limit(6)->get();
        return view('home',['collection'=>$photo]);

    }
    function photodetail($photo_id)
    {

        session()->put('photo_id', $photo_id);
        $photos= Photos::find($photo_id);
        return view('photodetail',['item'=>$photos]);
    }
}
