<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\catagories;
use App\Models\User;
use App\Models\Bid;
use Illuminate\Http\Request;

class HomeController extends Controller
{ 
     
    public function home()
    {   
        $products=Product::latest()->get()->take(6);
        $category=catagories::all();
        // dd($products);
        return view('frontend.layouts.home',compact('products','category'));
    }
    public function categoryproduct($id)

        {
            $category=catagories::all();
            
            $categoryproduct=Product::where('Category_id',$id)->get();
            
            
            return view ('frontend.layouts.categorywise',compact('categoryproduct','category'));
        }
        public function approvewinner()
        {
            return view('Frontend.layouts.approvewinner');
        }
       
        public function viewwinner()
        {  
             $bids=Bid::where('user_id',auth()->user()->id)->get();
            return view('Frontend.layouts.winnerview',compact('bids'));
        }



}
