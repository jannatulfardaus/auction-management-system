<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Bid;
use App\Models\catagories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list ()
    {    if(auth()->user()->role == 'seler'){
        $products=Product::with('catagory')->where('user_id',auth()->user()->id)->paginate(5);
        $categories = catagories::select('id','name')->get();
        return view('backend.layouts.product.list',compact('products','categories'));
    }
        $products=Product::with('catagory')->paginate(5);
        $categories = catagories::select('id','name')->get();
        return view('backend.layouts.product.list',compact('products','categories'));
    }
    public function store(Request $request)
    {
        $fileName='';
            if($request->hasFile('product_image'))
            {
                $file=$request->file('product_image');
               //generate file name here
                $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$fileName);
            }
        Product::create([
            'name' => $request->Product_name,
            'Category_id' => $request->Category_id,
            'description' =>$request->description,
            'base_price' =>$request->base_price,
            'sold_price' =>$request->sold_price,
            
            'expired_date'=>$request->expired_date,
            'image' =>$fileName,
            'user_id' => auth()->user()->id
            
        ]);
        return redirect()->back(); 
    }
    public function approvepost($id){
        if(auth()->user()->role == 'admin'){
            $products=Product::find($id);
            $products->update([
                'status'=> 'approved',
            ]);
            return back()->with('msg', 'approved successfully');
        }
        return redirect()->back();

      } 
      public function editproducts($id)
      {   $products=Product::find($id);
        $categories=catagories::all();
          return view('backend.layouts.product.edit',compact('products','categories'));
      }
      public function updateproducts(Request $request,$id)
      {     

        $products=Product::find($id);
          $fileName='';
              if($request->hasFile('product_image'))
              {
                  $file=$request->file('product_image');
                 //generate file name here
                  $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                  $file->storeAs('/uploads',$fileName);
              }
          $products->update([
              'name' => $request->Product_name,
              'Category_id' => $request->Category_id,
              'description' =>$request->description,
              'base_price' =>$request->base_price,
              'sold_price' =>$request->sold_price,
              
              'expired_date'=>$request->expired_date,
              'image' =>$fileName,
              'user_id' => auth()->user()->id
              
          ]);

          return redirect()->route('product.list')->with('message','Product updated successfully.');
         
      }
























      public function bidderdetails($id)
      {
       
          $user=Bid::where('product_id',$id)->get();
          $maxPrice = $user->max('price');
          return view('backend.layouts.product.bidderdetails',compact('user','maxPrice'));

      }
      public function bidderapprove($id){
       
        if(auth()->user()->role == 'seller'){
            $data=Bid::find($id);
            $data->update([
                'status'=> 'approved',
            ]);
            return back()->with('msg', 'approved successfully');
        }
        return redirect()->back();

      } 

      public function deletepost($id)
      {

         //  dd($house_id);
          $product=Product::find($id);
         if($product)
         {
             $product->delete();
             return redirect()->back()->with('message','Product Deleted successfully.');
         }
         return redirect()->back()->with('message','No poduct found to delete.');
        }

      

    


}

