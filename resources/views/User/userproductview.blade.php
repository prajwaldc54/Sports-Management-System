@extends('include/user')
@section('maincontent')
    <div class="container">

        <div class="page-header">
            <h2 >User Products</h2>
        </div>

        @foreach($product as $data)
                @if($data->stocked==1 and $data->recieved==1 and $data->approved==1)
            <div class="product col-lg-3 col-md-6 mb-4">
                <div class="card">
                    {{--/singleproductview/{{$data->proid}}--}}
                    <div class="picture-padding"><a href="/userproductid/{{$data->productid}}"><img class="card-img-top " src="{{asset('UserProductImage')}}/{{$data->picture}}" alt="product" height="200px" width="200px"></a></div>
                    <div class="card-body">
                       <div class="brand"> <h5 class="card-title">{{$data->sport}}</h5></div>
                        <div class="item-padding"><p class="card-text"><b>{{$data->brand}} {{$data->color}}/{{$data->product_name}}</b></div></p>
                        <div class="item-price"><p class="card-text"><span>Rs.</span> {{$data->retail_price}}</p></div>
                    </div>
                </div>
            </div>
@endif
        @endforeach
    </div>

    @endsection
