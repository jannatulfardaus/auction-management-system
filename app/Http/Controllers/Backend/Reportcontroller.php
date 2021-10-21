<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bid;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reportcontroller extends Controller
{
    
    public function doreport()
    {
        $bids=bid::orderBy('price', 'desc')->get();
    
        $products =Product::with('bidders')->get();

        return view('backend.layouts.report',compact('bids'));
    }
    public function datewisebid(Request $request)
    {  
       $bids=Bid::whereBetween('created_at',[$request->date,$request->date1])->get();

       
       return view('backend.layouts.report',compact('bids'));
    }


}
