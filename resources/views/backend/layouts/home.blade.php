@extends('backend.main')

@section('content')

  

     @if(auth()->user()->role == 'admin')
        <div class="col-md-3" style="background-color:#6B8E23; padding: 50px; margin-right: 10px">
            <h3>Total customer</h3>
            <p><h4>{{$bids}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: Pink; padding: 50px; margin-right: 10px;">
           <h3>Total Bid</h3>
            <p><h4>{{$bid}}</h4></p>
        </div>


  @endif

 @endsection