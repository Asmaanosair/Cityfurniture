<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\contact;
use App\product;
use App;
use Mail;
use App\Mail\sendmail;
use App\Mail\submail;

class sitecontroller extends Controller
{
    function index($locale){
        App::setLocale($locale);
        $slider=slider::all();
        $con=contact::all();
        $product=product::all();
        return view('index',['slider'=>$slider,'product'=>$product,'con'=>$con]);
    }
    public function sendmail(){
        Mail::send(new sendmail());
        return  back();
    }
    public function submail(){
        Mail::send(new submail());
        return  back();
    }
    function publish(){
        return redirect('/.en');
    }
}
