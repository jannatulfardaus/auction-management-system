 @extends('backend.main')

@section('content')

<h1 style="color:White; text-align: center;">Bid List</h1>
<div style="text-align:center:color:white">Highest Price - {{$maxPrice}}</div>


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
      <td>{{optional($data->user)->name}}</td>
      <td>{{$data-> price}}</td>
      <td>{{$data->status}} </td>
     <td>
                
     @if($maxPrice)
        <a href="" class="btn btn-success">Payment</a>
     @endif
                <a href="{{route('winner.bid',$data->id)}}" class="btn btn-primary">
                

              
                @endif -->
                @if($data->status == 'pending')
                                        <span class="label-custom label label-success"> Looser </span>

                                        @else

                                        <span class="label-custom label label-danger"> winner </span>

                                        @endif

                            </a>
                  </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection 