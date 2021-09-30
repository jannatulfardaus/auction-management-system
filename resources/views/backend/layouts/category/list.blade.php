@extends('backend.main')

@section('content')
<html>
<body>
<h1 style="color:White;">Category List</h1>
</body>
</html>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        Create Category List
    </button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Catagories name</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $catagories)
    <tr>
      <th scope="row">{{$catagories->id}}</th>
      <td>{{$catagories->name}}</td>
      <td>{{$catagories->status}}</td>
      <td>
      <a href="{{route('category.product',$catagories->id)}}" class="btn btn-primary">view</a>
        </td>
</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{ route('category.store') }}" method="POST">
                  @csrf
                
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                    </div>
                    <div class="modal-body"> 
                      
                    
                        <div class="form-group">
                            
                            
        
                            <input type="text" class="form-control" name="Category_name" placeholder="Enter Category name" style="background-color: lightgray">
                            
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" placeholder="Enter product description" style="background-color: lightgray" ></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection