@extends('backend.main')

@section('content')
<html>
<body>
<h1 style="color:White;">Product List</h1>
</body>
</html>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        Create Product List
    </button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">product name</th>
      <th scope="col">product image</th>
      <th scope="col">catagory name</th>
      <th scope="col">description</th>
      <th scope="col">Regular Price</th>
      <th scope="col">Starting bid</th>
      <th scope="col">Expired Date</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>
                <img src="{{url('/uploads/'.$product->image)}}" width="100px" alt="product image">
            </td>
      <td>{{$product->catagory->name}}</td>
      <td width="25%">{{$product->description}}</td>
      <td>৳{{$product->base_price}}</td>
      <td>{{$product->sold_price}} .BDT</td>
      <td>{{$product->expired_date}}</td>
      <td >
                {{$product->status}}
                </td>
                
                <td>
                <a href="{{route('delete.post',$product->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('bidder.details',$product->id)}}" class="btn btn-success">bidder</a> 
                <a href="{{route('edit.product',$product->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                

               
                

                @if(auth()->user()->role == 'admin')
                @if($product->status =='pending' )
                <a href="{{route('post.approve',$product->id)}}" class="btn btn-primary">

                  <span class='label-custom label label-success'>waiting</span>
              
                </a>
                @elseif($product->status =='approved' )
                  <span class='label-custom label label-success'>Approved</span>
                @endif

                @else
                <button class='btn btn-info'>wait for approval</button>
                @endif
               
                </td> 
               
           
    </tr>
    @endforeach
  </tbody>
</table>
<div class="text-warning">
{{$products->links('pagination::bootstrap-4')}}
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                      <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                      
                        @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                    </div>
                    <div class="modal-body">
                    
                    <div class="form-group">
                     
                            <label for="Product_name">Enter Product Name</label>
                            <input type="text" class="form-control" value="" id="product_price" name="Product_name" placeholder="Product name" >
                           </div>  

                          <div class="form-group">
                            <label for="description">Upload Product Image</label>
                            <input type="file" class="form-control" name="product_image">
                          </div>


                          <div class="form-group">
                                  <label for="exampleFormControlSelect1">Catagory select</label>
                                    <select name="Category_id" id="" class="form-control" required="">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                     </select>
                          </div>

                
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter product description"  ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="base_price">Starting bid</label>
                            <input type="number" class="form-control" id="product_price" name="base_price" placeholder="Regular Price" >
                           </div>
                           <div class="form-group">
                            <label for="sold_price">Regular price</label>
                            <input type="number" class="form-control" id="product_price" name="sold_price" placeholder="Starting Price" >
                           </div>
                           <div class="form-group">
                            <label for="expired_date">Expired Date</label>
                            <input type="date" class="form-control" id="product_price" name="expired_date" placeholder="Expired Date" >
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