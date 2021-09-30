@extends('backend.main')
@section('content')

<h1 style="color:White;">Product Under Category</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">base price</th>
            <th scope="col">sold price</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($products as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->base_price}}</td>
                <td>{{$data->sold_price}}</td>

               

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

    
  