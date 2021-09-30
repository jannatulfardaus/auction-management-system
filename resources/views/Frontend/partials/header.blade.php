
	<div class="container">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-3">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="{{route('home')}}">Home</a>

                           @auth()
                           <a class="nav-item nav-link" href="{{route('approve.winner')}}">{{auth()->user()->name}}</a>
                           <a class="nav-item nav-link" href="{{route('user.logout')}}">logout</a>
                           @endauth
                           @guest()
                           <a class="nav-item nav-link" href="{{route('customer.login')}}">Login</a>
                           <a class="nav-item nav-link" href="{{route('user.signup')}}">Customer Signup</a>
                           <a class="nav-item nav-link" href="{{route('seller.signup')}}">Seller Signup</a>
                           @endguest
                           <a class="nav-item nav-link" href="contact.html">Contact</a>
                           <form action="{{route('search.product')}}" method="get">
{{--                            @csrf--}}
                        <input style="width: 250px;" type="text" placeholder="Search" name="search" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i></button>
                        </form>
		
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
        
    
