@extends('include/index')
@section('login')

    <ul class="navbar-nav ml-auto mr-0 mr-md-2 my-2 my-md-0">
        <li class="nav-item active">
            <a class="nav-link" href="/home">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        {{--<li class="nav-item active">--}}
        {{--<a class="nav-link" href="index.html">--}}
        {{--<i class="fas fa-fw fa-tachometer-alt"></i>--}}
        {{--<span>Delivery Location</span>--}}
        {{--</a>--}}
        {{--</li>--}}
        <li class="nav-item active">
            <a class="nav-link" href="/contact">
                <i class="fa fa-envelope"></i>
                <span>Contact Us</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/help">
                <i class="fa fa-hands-helping"></i>
                <span>FAQ and Help </span>
            </a>
        </li>

        <li class="nav-item active">
            <a href="#" data-toggle="modal" data-target="#loginModal" class="nav-link"><i class="fas fa-user-circle fa-fw"></i>Login</a>
        </li>

        <li class="nav-item active">
            <a href="#" data-toggle="modal" data-target="#registerModel" class="nav-link"><i class="fas fa-users fa-fw"></i>Signup</a>
        </li>
        <i class="fa fa-sign-in"></i>
        {{--<li class="nav-item dropdown no-arrow">--}}
        {{--<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
        {{--<i class="fas fa-user-circle fa-fw"></i>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">--}}
        {{--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>--}}
        {{--<a class="dropdown-item" href="/signup">Signup</a>--}}
        {{--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModel">Sign Up</a>--}}
        {{--</div>--}}
        {{--</li>--}}
    </ul>

@endsection

<div class="modal fade" id="loginModal"  role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Sign In</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModel"  role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Sign Up</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times
                </button>
            </div>
            <div class="modal-body">
                <form  method="Post" action="/adduser" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fa fa-user"></i>
                                <span><label>First Name</label></span>
                                <input type="text" name="firstname" placeholder="First Name" class="form-control">
                            </div>

                            <div class="col-lg-6">
                                <i class="fa fa-user"></i>
                                <span><label>Last Name</label></span>
                                <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fa fa-phone"></i>
                                <span><label>Phone Number</label></span>
                                <input type="text" name="phone" placeholder="Phone number" class="form-control">
                            </div>

                            <div class="col-lg-6">
                                <i class="fa fa-address-book"></i>
                                <span><label>Address:</label></span>
                                <input type="text" name="address" placeholder="Address" class="form-control">
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fa fa-transgender"></i>
                                <span><label>Gender:</label></span>
                                <input type="radio" name="gender" value="Male"  checked>Male
                                <input type="radio" name="gender" value="Female" >Female<br/>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fa fa-envelope"></i>
                                <span><label>E-mail Address</label></span>
                                <input type="text" name="email" placeholder="E-mail address" class="form-control">
                            </div>

                            <div class="col-lg-6">
                                <i class="fa fa-lock"></i>
                                <span><label>Password:</label></span>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div><br/>

                        <div class="signupbut"><input type="submit" value="Create Your Account" class="btn btn-danger"></div><br/>


                        <label>By signing up you aggree with Terms and Privacy Policy</label><br/>
                        Have an account? <a href="#" type="button" class="btn btn-primary">Login</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@section('maincontent')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="margin-top: -1em;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('home_slide_image/boxing.jpeg')}}" alt="Man boxing" width="100%" height="570px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home_slide_image/slide.jpg')}}" alt="all sports" height="570px">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home_slide_image/slide0.jpg')}}" alt="Worldcup ball" height="570px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="content ">
        <div class="globe">
            <!-- Sliding of pictures -->

            <div class="slide">
                <img src="{{asset('image/globe.jpeg')}}" alt="globe" height="350" width="550"/>
            </div>

        </div>

        <div class="content_define">
            <h1 style="font-size: 40px;">Sport Shop Store</h1>
            <span> Sport shop is one of biggest online shopping website. With internet users on the high rise, world is moving towards digital revolution.
            Customer no longer have to wait in traffic, bargain for discount and spends precious time looking for the products and services. But now it takes only few clicks
            and a few seconds to view the product you want and place order at Sport Shop. Delivery service is also available and is as free since the delivery charge is very low.
            </span>
        </div>
    </div>
    <div class="description " >
        <div class="desc1">
            <h3>Our Service</h3>
            <span>
                We are happy to see customer from every hook and corner of Nepal placing their orders at our shop. The Product price is sold with very little profit.
                You can easily compares the price. You can choose and freely view all the products detail and do research. You can send gifts. You don't have to be shy to
                watch the product.
    </span>
        </div>
        <div class="desc2">
            <h3> Product Exchange and Order Cancel</h3>
            <span>IF the product you recieve is different than you ordered you can return the goods within specified time period. Return and exchange are guaranteed.
                Order can be cancel by canceling order within specified time. You can cancel via message or phonae call too. Feel Free to Shop. Begin your Journey with our online store
                by filling a simple registration. Once the registration is done, You can start ordering and selling your products from anywhere.
            </span>
        </div>
    </div>
    <div class="warehouseservice " align="center">
        <h2> Ware housing and fulfillment Service?</h2>
        <div class="warehouse-and-fullfillment col-lg-8" >
            With warehousing and fullfillment, you can store products sold at your store at our warehouse, and we'll fulfill your orders and ship the products directly to your customer under your
            own brand.
            <p><b>Affordable pricing</b></p>
            <p><b>Free signup</b></p>
            <p><b>Automatic Order fullfillment</b></p>
            <p> <b>Friendly support team</b></p>
            <p><b>Best shipping Price</b></p>

            See if any of the below apply so that you can be eligible for this service?
            <div class="jumbotron col-lg-7" >
                <p>  Have a store with an expanding product, but <b>don't want to handle order fullfilment?</b></p>
                <p>Your product should not be big as it can take space at our warehouse. So, <b>big size product</b> won't be approved.</p>
                <p>Or maybe you want to <b>free up some space</b> and leave the struggle of packing and shipping products by yourself to us? </p>
                <p>You can only store product related to store at our ware house -  <b>jersey, Ball, Sport Shoes, Sport bag, Purse, Sports things like cricket, Batminton</b></p>
            </div>
        </div>

    </div>
    <div class="address"  align="center">
        <h2><b> Where we store our products</b></h2>
        <h4>You can store products at our fullfillment center in <b>Dillibazar, Kathmandu</b>.</h4>
        <div class="address-detail" style="margin-top: 2em;">
            <img src="{{asset('image/shop.jpeg')}}" alt="globe" height="350" width="600"/>
        </div>
    </div>
@endsection