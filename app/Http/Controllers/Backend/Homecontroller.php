<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bid;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{   
    public function home()
    {
    
      $bid=Bid::all()->count();   
    $title='Dashboard';
        $link='Dashboard / home';
        return view('backend.layouts.home',compact('title','link','bid'));

        
    }
}
