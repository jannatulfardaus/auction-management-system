@extends('backend.main')

@section('content')
<h1 style="color:White;">Payment Record</h1>
    <table class="table">

    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

        <thead>
        <tr>
             <th>ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Seller name</th>
            <th scope="col">Bid Price</th>
            <th scope="col">User name</th>
            <th scope="col">Payment Type</th>
            <th scope="col">Amount</th>
           <th>Payment Date</th>
           <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
@foreach($payments as $key=>$pay)
            <tr>
               <th scope="row">{{$key+1}}
                <td>{{$pay->bid->product->name}}</td>
                <td>{{$pay->user->name}}</td>
                <td>{{$pay->bid->price}}</td>
                <td>{{$pay->bid->user->name}}</td>
                <td>{{$pay->payment_type}}</td>
                <td>{{$pay->amount}}</td>
                <td>{{$pay->pay_at}}</td>
                <td>{{$pay->status}}</td>
              
                <td>
               
                <a href="{{route('seller.approve',$pay->id)}}" class="btn btn-primary">payment</a>
             
                 </td>
            </tr>
            @endforeach
       
        </tbody>
    </table>

    
@endsection