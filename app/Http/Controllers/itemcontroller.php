<?php

namespace App\Http\Controllers;

use App\item;
use App\product;
use DB;
use Illuminate\Http\Request;

class itemcontroller extends Controller
{
    function index(){
        $product=product::all();
        $item=item::paginate(8);
        return view('admin.item.show',['product'=>$product,'item'=>$item]);
    }
    function create(){
        $product=product::all();
        return view('admin.item.add',['product'=>$product]);
    }
    function store(Request $request){
        if($request->hasFile("img")) {
            $path = "img";
            $file = $request->img;
            $extention = $file->getClientOriginalExtension();
            $name = rand(1111, 99999) . "." . $extention;
            $file->move($path, $name);
            echo $file;
        }
        $product = new item();
//        $product->name = $request->name;
        $product->name_ar = $request->name_ar;
        $product->product_id = $request->sel;
//        $product->price = $request->price;
        $product->img = $name;
        $product->save();
        return back();

    }
    public function update(Request $request, $id)
    {


        if($request->hasFile("img")) {
            $path = "img";
            $file = $request->img;
            $extention = $file->getClientOriginalExtension();
            $name = rand(1111, 99999) . "." . $extention;
            $file->move($path, $name);
            echo $file;
        }
        $product =  item::find($id);
//        $product->name = $request->name;
        $product->name_ar = $request->name_ar;
        $product->product_id = $request->sel;
//        $product->price = $request->price;
        $product->img = $name;
        $product->save();
        return back();


    }
    public  function delete($id){
        $product=item::find($id);
        $product->delete();
        return  back();

    }
    ///////////////////////////////
    /// end product////////////
    /// ////////////////////////
}
