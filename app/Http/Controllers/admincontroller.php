<?php

namespace App\Http\Controllers;

use App\contact;
use App\slider;
use Illuminate\Http\Request;
use App\product;
use DB;


class admincontroller extends Controller
{
   function index(){
       return view('admin.dashboard');
   }
   function product(){
       $product=product::all();
       return view('admin.product.showall',['product'=>$product]);
   }
    function create(){

        return view('admin.product.addproduct');
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
        $product = new product();
       $product->name = $request->name;
       $product->name_ar = $request->name_ar;
        $product->price = $request->price;
        $product->img = $name;
       $product->save();
       return redirect('/product');

    }
    public function update(Request $request, $id)
    {



        $this->validate($request, array(
            'img' => 'mimes:jpg,png,gif,jpeg'
        ));
        if (empty($request->img)) {
            $img = product::find($id)->img;
            DB::table('products')->where(['id' => $id])
                ->update(['img' => $img, 'price' => $request->price, 'name' => $request->name,'name_ar' => $request->name_ar
                ]);
        } else {
            $this->validate($request, array(
                'img' => 'mimes:jpg,png,gif,jpeg'
            ));
            if ($request->hasFile('img')) {
                $path = 'img';
                $img = $request->img;
                $extention = $img->getClientOriginalExtension();
                $imgname = rand(1111, 9999) . "." . $extention;
                $img->move($path, $imgname);

                DB::table('products')->where(['id' => $id])
                    ->update(['img' => $imgname,  'price' => $request->price, 'name' => $request->name,'name_ar' => $request->name_ar
                    ]);
            }
        }
        return redirect('/product');
    }
    public  function delete($id){
        $product=product::find($id);
        $product->delete();
        return redirect('/product');

    }
    ///////////////////////////////
    /// end product////////////
    /// ////////////////////////

    ///////////////////////////////
    /// slider////////////
    /// ////////////////////////
    function slider(){
        $slider=slider::all();
        return view('admin.slider.show',['slider'=>$slider]);
    }
    function create_slider(){

        return view('admin.slider.add');
    }
    function store_slider(Request $request){

        $slider = new slider();
        $slider->title = $request->title;
        $slider->title_ar = $request->title_ar;
        $slider->description = $request->des;
        $slider->description_ar = $request->des_ar;

        $slider->save();
        return redirect('/slider');

    }
    public function update_slider(Request $request, $id)
    {

                DB::table('sliders')->where(['id' => $id])
                    ->update([  'title' => $request->title,'title_ar' => $request->title_ar,
                        'description' => $request->des,'description_ar' => $request->des_ar
                    ]);


        return redirect('/slider');
    }
    public  function delete_slider($id){
        $product=slider::find($id);
        $product->delete();
        return redirect('/slider');

    }
    ///////////////////////////////
    /// end slider////////////
    /// ////////////////////////


    ///////////////////////////////
    /// contact////////////
    /// ////////////////////////
    function contact(){
        $con=contact::all();
        return view('admin.contact.contact',['con'=>$con]);
    }


    public function update_contact(Request $request, $id)
    {

        DB::table('contacts')->where(['id' => $id])
            ->update([  'address' => $request->address,'address_ar' => $request->address_ar,
                'facebook' => $request->fb,'whats' => $request->wh,'phone' => $request->ph,'phone1' => $request->ph1,'email' => $request->em
            ]);


        return redirect('/contact');
    }

    ///////////////////////////////
    /// end contact////////////
    /// ////////////////////////
}
