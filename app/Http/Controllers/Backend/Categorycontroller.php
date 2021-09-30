<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\catagories;
use App\Models\Product;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function list()
      {
        $categories=Catagories::all();
        return view('backend.layouts.category.list',compact('categories'));
    }
    public function store(Request $request)
    
    {
      
      catagories::create([
        'name' => $request->Category_name,
        'details'=> $request->description,

      ]);
      return redirect()->back();
    }

       public function allproduct($id)
       {
         
        $products=Product::where('category_id',$id)->get();
         return view('backend.layouts.category.product-list',compact('products'));
       }

}
