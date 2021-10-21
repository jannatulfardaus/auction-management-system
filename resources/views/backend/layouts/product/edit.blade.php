@extends('backend.main')

@section('content')
<html>
<body>
<h1 style="color:White;">Product List</h1>
</body>
</html>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" >
        <i class="bi bi-alarm"></i>
        Update Product List
    </button>






<!-- Modal -->


                      <form action="{{route('update.product',$products->id)}}" method="POST" enctype="multipart/form-data">
                        
                      @method('PUT')
                        @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                    </div>
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="product_name">Name</label>
                            <input value="{{$products->name}}"type="text" class="form-control" id="product_name" name="Product_name" placeholder="Enter product name" >
                          </div>

                          <div class="form-group">
                            <label for="description">Upload Product Image</label>
                            <input type="file" class="form-control" name="product_image">
                          </div>


                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Catagory select</label>
                            <select class="form-control" name="Category_id" id="">
                    @foreach($categories as $cat)
                        <option
                            @if($products->category_id==$cat->id)
                            selected
                            @endif
                            value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                               
                                     </select>
                                </div>

                
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea value="{{$products->description}}" name="description" id="description" class="form-control" placeholder="Enter product description"  ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="base_price">Starting bid</label>
                            <input value="{{$products->base_price}}" type="number" class="form-control" id="product_price" name="base_price" placeholder="Starting bid" >
                           </div>
                           <div class="form-group">
                            <label for="sold_price">Regular price</label>
                            <input value="{{$products->sold_price}}" type="number" class="form-control" id="product_price" name="sold_price" placeholder="Regular price" >
                           </div>
                           <div class="form-group">
                            <label for="expired_date">Expired Date</label>
                            <input value="{{$products->expired_date}}" type="date" class="form-control" id="product_price" name="expired_date" placeholder="Expired Date" >
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