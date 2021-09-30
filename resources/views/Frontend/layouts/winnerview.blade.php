@extends('Frontend.master')
@section('contents')

<table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Bid Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>


  @foreach($bids as $data)
    <tr>
      <th scope="row">1</th>
      <td>{{$data->user->name}}</td>
      <td>{{$data->price}}</td>
     <td>

    
        
     @if($data->status == 'approved')
                                        <span class="label-custom label label-success"> winner </span>

                                        @else

                                        <span class="label-custom label label-danger"> looser </span>

                                        @endif

     </td>
     <td>
     @if($data->status == 'approved')
        <a href="{{route('payment.method')}}" class="btn btn-success">Payment</a>
    @endif
        
     </td>
     
    
    </tr>
    @endforeach
  </tbody>
</table>

@endsection


