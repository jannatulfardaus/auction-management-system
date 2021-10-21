<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Online Auction </h1>
                
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item" >
                            <a class="nav-link " href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>
                                {{auth()->user()->name}}
                               </span>
                            </a>
                        </li>
                        

                            @if(auth()->user()->role == 'admin')
                        
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>
                                Dashboard
                               </span>
                            </a>
                            </li> 
                         
                              <li class="nav-item">
                                 <a class="nav-link " href="{{route('category.list')}}">
                                    <i class="far fa-file-alt"></i>
                                    <span>
                                    Category 
                                    </span>
                                </a> 
                              </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product.list')}}">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.list')}}">
                            <i class="fas fa-address-book"></i>
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.bid')}}">
                            <i class="fas fa-address-book"></i>
                                Bid
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{route('customer.list')}}">
                                <i class="far fa-user"></i>
                                Customer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('do.report')}}">
                                <i class="far fa-user"></i>
                               Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('payment.approve')}}">
                            <i class="fas fa-address-book"></i>
                                Payment
                            </a>
                        </li> 
                        

                        @elseif(auth()->user()->role == 'seller')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product.list')}}">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.list')}}">
                            <i class="fas fa-address-book"></i>
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('payment.approve')}}">
                            <i class="fas fa-address-book"></i>
                                Payment
                            </a>
                        </li>  
                        @endif
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        </li>
                    </ul>
                    
                </div>
            </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
    </div>

        </nav>