<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function register(){
    return view ('product.register');
}
public function store(Request $request){
    $product=new product();
    $product=new $request->name;
    $product=new $request->unit;
     $product=new $request->price;
     $product=new $request->quantity;
     $product=new $request->id;
     $is_seccessed =$product::save();
     if  ($is_seccessed)
     echo 'record saved seccessed ';
     else 
     echo 'something went wrong try';

}



    //
}
