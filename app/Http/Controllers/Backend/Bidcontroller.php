<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bid;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bidcontroller extends Controller
{
    public function userbid()
    {
        $bids=bid::orderBy('price', 'desc')->get();
        $maxPrice = Bid::max('price');
        $products =Product::with('bidders')->get();

        return view('backend.layouts.bid',compact('bids','maxPrice'));
    }


    public function winnerapprove($id)
    {
        if(auth()->user()->role== 'admin'){
            $data=Bid::find($id);
            $data->update([
                'status'=> 'approved',
            ]);
            return back()->with('msg', 'approved successfully');
        }
        return redirect()->back('backend.layouts.bid');
    }

    public function bidwinner($id){
        if(auth()->user()->role == 'admin'){
            $data=Bid::find($id);
            $data->update([
                'status'=> 'approved',
            ]);
            return back()->with('msg', 'approved successfully');
        }
        return redirect()->back();

      } 
  
  
    
}
