<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\catagories;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
    }


    
     public function loginPost(Request $request)
    {   
       
        $credentials=[
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role == 'seller' || auth()->user()->role == 'admin'){
            return redirect()->route('dashboard');
            }else{
                return redirect()->route('home');  
            }

            //user logged in

        }

        return redirect()->back()->with('message','invalid user info.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }



    public function customerList()
    {
        $user=User::where('role','=','customer')->get();
        return view('backend.layouts.customer',compact('user'));
    }

    public function userList()
    {
       
        if(auth()->user()->role == 'seller'){
           
            $products=Product::with('catagory')->where('user_id',auth()->user()->id);
            $categories = catagories::select('id','name')->get();
            $id = auth()->user()->id;
            $user = User::where('id',$id)->get();
            
          
            return view('backend.layouts.user',compact('products','categories','user'));
        }

    }
    public function customerview($id)
    {   $bids=Bid::where('user_id',$id)->get();
        $user = User::find($id);
        return view('backend.layouts.customerview',compact('bids','user'));
    }


}
        
