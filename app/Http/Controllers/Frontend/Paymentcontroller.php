<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    public function paymentmethod()
    {
        return view('Frontend.layouts.payment');
    }
    public function postpayment(Request $request)
    {

        User::Create([
            'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'address'=>$request->address,
           'role'=>'customer',
           'Phone_Number'=>$request->Phone_Number,
        ]);
        return redirect()->back()->with('success','User Registration Successful.');
   
    }
}
