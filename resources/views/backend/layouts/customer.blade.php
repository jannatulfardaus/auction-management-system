@extends('backend.main')

@section('content')
<h1 style="color:White;">Customer List</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $data)
            <tr>
                <th scope="row">1</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>
                <td>
                <a href="{{route('customer.view',$data->id)}}" class="btn btn-primary">View</a>
                 </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
@endsection
