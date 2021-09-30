@extends('Frontend.master')
@section('contents')


<h1 style="color:White;">Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row">1</th>
      <td>{{auth()->user()->name}}</td>
      <td>{{auth()->user()->email}}</td>
      <td>{{auth()->user()->address}}</td>
      <td>
        
      <a href="{{route('view.winner')}}" class="btn btn-primary">View</a>
      </td>
    </tr>
  
  </tbody>
</table>



@endsection