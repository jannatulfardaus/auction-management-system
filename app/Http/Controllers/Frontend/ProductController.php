<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Bid;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        // //STEP 1 GET LATEST BID AMOUNT
        $heighestBid=Bid::where('product_id',$request->product_id)->orderBy('price','desc')->first();
        $product=Product::find($request->product_id);

        $highestPrice=$heighestBid?$heighestBid->price:$product->base_price;


        

        //check expire date
        if(date("Y-m-d",strtotime($product->expired_date))>=date('Y-m-d'))
        {
           // //STEP 2 CHECK REQUEST AMOUNT GREATER THEN LAST HEIGHST BID AMOUNT

            if($highestPrice<$request->price)
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
        else{
            return redirect()->back()->with('success','Date expire.');
        }

        
        
     }
    
        public function searchproduct()
        {
            
            $key=request()->search;
            $products=Product::where('name','LIKE',"%{$key}%")->get();
    
    
            return view('Frontend.layouts.search',compact('products'));
        }
    
}



