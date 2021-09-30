@extends('frontend.master')

@section('contents')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <br> </br>
    <br> </br>
    <br> </br>
    
    
<div class="d-flex justify-content-center"><h3><b>Register</b></h3></div>
<div class="card-body">

<body>

<style type="text/css">
body {
    background-image:url('https://media.istockphoto.com/photos/real-estate-law-and-house-auction-picture-id1270127069?b=1&k=20&m=1270127069&s=170667a&w=0&h=1ti_rFkh06t5flRKIx_cE-Iir_A46BdjkgbM52R0f1E='); 
  background-position:center;
  background-size:cover;

  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
</style>
@if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
 @endif
<form action="{{route('user.signup.store')}}" type="form" method="Post">
 @csrf
    <div class="form-group">
       <label for="customer_name" class="cols-sm-2 control-label">Full Name</label>
            <div class="cols-sm-10">
            <div class="input-group">
           <input  required type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
            </div>
            </div>
    </div>
         <div class="form-group">
           <label for="exampleFormControlFile1">Image</label>
             <div class="custom-file">
               <input type="file" class="form-control" name='image'>
    
                <br></br>
           </div>
             <div class="form-group">
               <label for="number" class="cols-sm-2 control-label">Phone Number</label>
                  <div class="cols-sm-10">
                  <div class="input-group">
                 <input required type="number" class="form-control" name="Phone_Number" id="name" placeholder="Enter your Phone Number">
                 </div>
                </div>
              </div>
<div class="form-group">
 <label for="present_address" class="cols-sm-2 control-label"> Address</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="text" class="form-control" name="address" id="name" placeholder="">
</div>
</div>
</div>

<div class="form-group">
<label for="email" class="cols-sm-2 control-label">Email</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
</div>
</div>
</div>
 <div class="form-group">
<label for="password" class="cols-sm-2 control-label">Password</label>
<div class="cols-sm-10">
<div class="input-group">
<input required type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
</div>
</div>
</div>
<div class="form-group">

<div class="form-group ">
<button type="submit" class="btn btn-success btn-lg btn-block login-button" href=" " >Create Account</button>
<br> </br>

</form>




@endsection