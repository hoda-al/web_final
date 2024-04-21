<?php

namespace App\Http\Controllers;

use App\Models\masseges;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class MassegesController extends Controller
{
    public function create(){
        return view('contact');
    }


     function store(Request $request){

        $request->validate([

            'full_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required|digits:10|numeric',
            'content_message'=>'required'
        ]);

        $massege=new masseges();
        $massege->full_name=$request->full_name;
        $massege->email=$request->email;
        $massege->phone_number=$request->phone_number;
        $massege->content_message=$request->content_message;


        Masseges::create($request->all());

        return redirect()->back()->with('success', 'تم ارسال رسالتك بنجاح ,سنتواصل معاك في اقرب وقت ممكن ');

    }



}
