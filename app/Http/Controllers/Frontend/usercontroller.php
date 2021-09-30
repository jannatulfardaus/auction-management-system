<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }

    public function signupFormPost(Request $request)
    {
        
    

      $request->validate([
         'name'=>'required',
         'email'=>'required|email|unique:users,email',
         'password'=>'required|min:7',
         'address'=>'required',
         'Phone_Number'=>'required'
     ]);
        User::Create([
            'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'address'=>$request->address,
           'role'=>'customer',
           'Phone_Number'=>$request->Phone_Number,
        ]);
        return redirect()->back()->with('success','User Registration Successful.');
   
    }


    public function sellerSignup()
    {
        return view('frontend.layouts.seller-signup');
    }


    public function selerRegistration(Request $request)
    {    
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:7',
            'address'=>'required',
            'Phone_Number'=>'required'
        ]);
        User::Create([
            'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'address'=>$request->address,
           'role'=>'seller',
           'Phone_Number'=>$request->Phone_Number,
        ]);
        return redirect()->back()->with('success','User Registration Successful.');
   
    }
    
    public function login()
        {
            return view('Frontend.layouts.login');
        }


        public function doLogin(Request $request)
        {
            $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role == 'customer') {
                return redirect()->route('home');  
            } 
            

            //user logged in

        }

        return redirect()->back()->with('message','invalid user info.');
        }
        public function logout()
    {
        Auth::logout();
        return redirect()->back();
        
    }



}
