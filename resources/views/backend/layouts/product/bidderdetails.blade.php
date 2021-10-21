@extends('backend.main')

@section('content')
<h1 style="color:White;">Bidder List</h1>
<div style="text-align:center:color:white">Highest Price - {{$maxPrice}}</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Product id</th>
            <th scope="col">Bid Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
           
        </tr>
        </thead>
        <tbody>
        @foreach($user as $data)
            <tr>
                <th scope="row">1</th>
                <td>{{$data->user->name}}</td>
                <td>{{$data->product->id}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->status}} </td>
            
               <td>
            
                <a href="{{route('bidder.approve',$data->id)}}" class="btn btn-primary">
               
                @if($data->status == 'pending')
                    <span class="label-custom label label-success"> Failure </span>

                    @else

                   <span class="label-custom label label-danger"> winner </span>

                    @endif

                    </a>
                  </td>
    </tr>
    @endforeach
  </tbody>
        </tbody>
    </table>

    
@endsection