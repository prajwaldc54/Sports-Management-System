@extends('include/user')


@section('sidebar')
<div class="category-sidebar">
    <div class="category">

        <h6 class="title"><b>Catagories</b></h6>

        <div class="catagories-list">
            <ul class="navbar-nav">
                <li><a href="/viewproductdetail">All</a></li>
                <li><a href="/category/Male">Male</a></li>
                <li><a href="/category/Female">Female</a></li>
                <li><a href="/category/Jersey">Jersey</a></li>
                <li><a href="/category/Boots">Boots</a></li>
                <li><a href="/category/Clothes">Clothes</a></li>
                <li><a href="/category/Ball">Ball</a></li>
                <li><a href="/category/Shoes">Shoes</a></li>
                <li><a href="/category/Football">Football</a></li>
                <li><a href="/category/Basketball">Basketball</a></li>
            </ul>
        </div>
    </div>

        <div class="color ">
            <!-- Widget Title -->
            <h6 class="color-title"><b>Color</b></h6>

            <div class="color-desc">
                <ul class="d-flex">
                    <li><a href="/category/White" class="color1"></a></li>
                    <li><a href="/category/Black" class="color2"></a></li>
                    <li><a href="/category/Grey" class="color3"></a></li>
                    <li><a href="/category/SkyBlue" class="color4"></a></li>
                    <li><a href="/category/Red" class="color5"></a></li>
                    <li><a href="/category/Yellow" class="color6"></a></li>
                    <li><a href="/category/Orange" class="color7"></a></li>
                    <li><a href="/category/Pink" class="color8"></a></li>
                </ul>
            </div>
        </div>

        <div class="price-search">
            <h6 class="color-title"><b>Price</b></h6>
            <form  method="Post" action="/pricesearch"  enctype="multipart/form-data">
            @csrf
          <div class="input-group">
              <input type="text" name="Minimum" class="form-control">  <i class="fa fa-arrows-alt-h"></i>
              <input type="text" name="Maximum" class="form-control">
          </div><br>
                <input type="submit" value="Sort by price" class="btn btn-danger btn-sm">
            </form>
        </div>


</div>
    @endsection
@section('maincontent')
    <div class="container">

        <div class="page-header">
            <h2 >Products</h2>
        </div>

        @foreach($product as $data)
            <div class="product col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="picture-padding">
                        <a href="/singleproductview/{{$data->proid}}">
                            <img class="card-img-top " src="{{asset('Sport_Gallery')}}/{{$data->picture}}"
                                                                           alt="product" height="200px" width="200px"></a></div>
                    <div class="card-body">
                       <div class="brand"> <h5 class="card-title">{{$data->sport}}</h5></div>
                        <div class="item-padding">
                            <p class="card-text"><b>{{$data->brand}} {{$data->color}}/{{$data->item_name}}</b></div></p>

                            <form method="post" action="/addtocart" entype="multipart/form-data">
                                @csrf
                                <div class="item-price">
                                    <span class="card-text"><span>Rs.</span> {{$data->item_price}}</span>
                                <input type="hidden" value="{{$data->proid}}" name="productid"/>
                                <input type="hidden" value="{{Auth::user()->id}}" name="userid"/>

                              <input type="submit" value="Add to Cart" class="btn btn-info btn-sm">
                                </div>
                            </form>


                    </div>
                </div>
            </div>

        @endforeach
    </div>

    @endsection
