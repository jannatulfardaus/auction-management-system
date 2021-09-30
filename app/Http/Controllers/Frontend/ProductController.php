<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Bid;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function viewProduct($id)
    {
        $product=Product::find($id);
        $bids=DB::table('bids')->where('product_id',$id)->orderBy('price','desc')->get();
       
        return view('Frontend.layouts.singleview',compact('product','bids'));
    }

    public function bidNow(Request $request)
    {
        //STEP 1 GET LATEST BID AMOUNT
        $heighstBid=Bid::where('product_id',$request->product_id)->orderBy('price','desc')->first();

        //STEP 2 CHECK REQUEST AMOUNT GREATER THEN LAST HEIGHST BID AMOUNT

        if($heighstBid->price<$request->price)
        {
            $bids=Bid::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
                'price' => $request->price,
                'status' => 'pending'
            ]);
            return redirect()->back()->with('success','successfully');
        }
        return redirect()->back()->with('success','your bid should be higher than current bid');
        
     }
    
        public function searchproduct()
        {
            
            $key=request()->search;
            $products=Product::where('name','LIKE',"%{$key}%")->get();
    
    
            return view('Frontend.layouts.search',compact('products'));
        }
    
}



