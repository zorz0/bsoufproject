<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class Cardcontroller extends Controller
{
    // public function index(){

    //     $data=auth()->user()->card;


    //     return view('front.card',compact('data'));
    // }



    public function store(Request $request){

        Card::create($request->all());

        return redirect("cart");
    }





}
