<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Bid;

class Paymentcontroller extends Controller
{
    public function paymentmethod($id)
    {   
    
        $bid=Bid::where('user_id',$id)->first();
        
        return view('Frontend.layouts.payment',compact('bid'));
    }
    public function paymentstore(Request $request)
    {
      

        payment::Create([
           'bid_id'=>$request->bid_id,
           'amount'=>$request->amount,
           'user_id'=> $request->user_id,
           'pay_at'=>$request->date,
           
         
        ]);
        
        return redirect()->back()->with('success','payment successfully');
   
    }
}
