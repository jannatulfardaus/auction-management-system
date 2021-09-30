@extends('Frontend.master')
@section('slider')
    @include('Frontend.partials.slider')
@endsection
@section('contents')





    <!-- new collection section start -->
    <div class="menu-box">
		<div class="container">
           
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1>Product</h1>
						<p>Our All Product list</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
                    @foreach($category as $data)
						<div class="button-group filter-button-group" style="display: inline-block; padding: 10px; font-size: 20px; font-weight: bold; ">
							<button><a href="{{route('categorywise',$data->id)}}" class="active" data-filter="*">{{$data->name}}</a></button>
							
						</div>
						@endforeach
					</div>
				</div>
			</div>
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>All Products</strong></h1>
        </div>
    </div>
    <!-- new collection section end -->
    <!-- New Arrivals section start -->
  

    <div class="layout_padding gallery_section">
        <div class="container">
            <div class="row" >
                @foreach($products as $data)

                <div class="col-sm-3">
                    <a href="{{route('product.view',$data->id)}}">
                    <div class="best_shoes" >
                        <p class="best_text">{{$data->name}} </p>
                        <div class="shoes_icon"><img width="400px" src="{{url('/uploads/'.$data->image)}}"></div>
                        <div class="star_text">
                            <div class="left_part">

                            </div>
                            <div class="left_part">
                                <div class="shoes_price"> <span style="color: #ff4e5b;">Price-${{$data->base_price}}</span></div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach

            </div>
            <div class="buy_now_bt">
               
            </div>
        </div>
    </div>
    <!-- New Arrivals section end -->
    <!-- contact section start -->
    <div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text"><strong>Contact Now</strong></h1>
        </div>
        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                                    </div>

                                    <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment"
                                              name="Massage"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="send_btn">
                                <button class="main_bt">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop_banner">
                        <div class="our_shop">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

@endsection
