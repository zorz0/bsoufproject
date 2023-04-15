<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class WebController extends Controller
{
   public function products()
   {

    $data=Product::all();
   return view('front.store',compact("data"));

   }


   public function showProduct($id)
   {

    $data=Product::find($id);
    $dataImages=ProductImage::where('product_id',$data->id)->take(4)->get();
   return view('front.card',compact("data","dataImages"));

   }



}
