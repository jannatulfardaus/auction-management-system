<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class Paymentcontroller extends Controller
{
    public function approvedpayment()
    { 
       
        if(auth()->user()->role == 'seller'){
            $payments=Payment::where('user_id',auth()->user()->id)->get();
        }else{
            $payments=Payment::orderBy('id','desc')->get();
        }
     

        return view('backend.layouts.paymentrecord',compact('payments'));
    }

    public function paymentapproved($id)
    {
       Payment::find($id)->update([
       'status'=>'paid'
       ]);
 
       return redirect()->route('payment.approve')->with('message','payment confirm');
    }
}
