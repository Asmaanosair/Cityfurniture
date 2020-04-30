<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(["middleware"=>['auth']],function (){

Route::get('/ktadmin' ,'admincontroller@index');
//////////////////product/////////////
/// //////////////////////
Route::get('/product' ,'admincontroller@product');
Route::get('/create' ,'admincontroller@create');
Route::post('/add_product' ,'admincontroller@store');
Route::post('/up_product/{id}' ,'admincontroller@update');
Route::get('/del_product/{id}' ,'admincontroller@delete');
//////////////////////////////////
//////////////////end product/////////////
/// //////////////////////
///
//////////////////Item/////////////
/// //////////////////////
    Route::get('/kt_admin/item' ,'itemcontroller@index');
    Route::get('/cr_item' ,'itemcontroller@create');
    Route::post('/add_item' ,'itemcontroller@store');
    Route::post('/up_item/{id}' ,'itemcontroller@update');
    Route::get('/del_item/{id}' ,'itemcontroller@delete');
//////////////////////////////////
//////////////////end Item/////////////
/// //////////////////////

//////////////////slider/////////////
/// //////////////////////
Route::get('/slider' ,'admincontroller@slider');
Route::get('/create_slider' ,'admincontroller@create_slider');
Route::post('/add_slider' ,'admincontroller@store_slider');
Route::post('/up_slider/{id}' ,'admincontroller@update_slider');
Route::get('/del_slider/{id}' ,'admincontroller@delete_slider');
//////////////////////////////////
//////////////////end slider/////////////
/// //////////////////////

/// //////////////////contact/////////////
///// //////////////////////
Route::get('/contact' ,'admincontroller@contact');
Route::post('/up_contact/{id}' ,'admincontroller@update_contact');

////////////////////////////////////
////////////////////end contact/////////////
///// //////////////////////
///
    Route::get('/logout',function (){
        auth()->logout();
        return view('auth.login');
    });
});
Route::get('/.{local}' ,'sitecontroller@index');
Route::get('/' ,'sitecontroller@publish');
Route::post('/send' ,'sitecontroller@sendmail');
Route::post('/sub' ,'sitecontroller@submail');
Auth::routes();


