<?php

use Illuminate\Support\Facades\Route;

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


Route::get(null, function () {
    return view('input');
});
Route::post('output', function (Illuminate\Http\Request $request ) {
    $listPrice=$request->listprice;
    $discount=$request->discount/100;
    $output=$listPrice-$discount*$listPrice;
    return view('output',compact('listPrice','output'));
});
