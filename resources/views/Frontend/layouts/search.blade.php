@extends('Frontend.master')
@section('contents')


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



@endsection