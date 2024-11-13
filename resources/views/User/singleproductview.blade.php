{{--@extends('include/bootstrapinclude')--}}
@extends('include/user')
@section('maincontent')

    @foreach($product as $data)
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="image-pad"> <img class="card-img-top " src="{{asset('Sport_Gallery')}}/{{$data->picture}}" alt="product" height="410px" ></div></div>

    <div class="col-lg-5">
        <div class="pro-detail">
        <div class="page-header">
            <div class="product-title">{{$data->brand}} {{$data->brand}}/{{$data->color}}/{{$data->item_name}} {{$data->accessories}}
            For {{$data ->gender}}
            </div>
            <div class="brand"> <h5>By {{$data->supplier}}</h5></div>
        </div>
            <form method="post" action="/addorder" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" value="{{$data->proid}}" name="productid"/>
                    <input type="hidden" value="{{Auth::user()->id}}" name="userid"/>
                    <div class="col-lg-4">
                        <i class="fa fa-chart-area"></i>
                        <span>Size</span>

                      @if($data->accessories=='Shoes' or $data->accessories=='Boots' )

                            <select name="size" class="form-control">
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        </select>

                        @elseif ($data->accessories=='Clothes'or $data->accessories=='Jersey')

                            <select name="size" class="form-control">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>

                        </select>
                        @elseif ($data->accessories=='Ball')

                            <select name="size" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>

                            </select>
                        @else

                                <option name="size" value=""  hidden></option>
                            <span class="input-group"><i class="fa fa-save"></i></span>
                            <span>Save Rs 250 </span>

                          @endif
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Quantity</span>
                        <input type="number" name="quantity" placeholder="Quantity" class="form-control" required>
                    </div>
                </div><br/>


                <div class="row">
                <div class="col-lg-4">
                    <span><b><div class="price">Rs {{  $data->item_price}}</div></b></span><br/>
                    <strike> Rs {{ $data->item_price+0.16*$data->item_price }}</strike><b><input type="button" class="btn btn-warning btn-sm" value="16% off" disabled></b>
                </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Delivery Address</span>
                        <input type="text" name="address" placeholder="Address" class="form-control" required>
                    </div>

                </div><br/><br/>
                <div  style="margin-left: 3px;">
                    <input type="submit" value="Order" class="btn btn-warning btn-lg"><br/>
                </div>
            </form>
            <div class="addtocartbutton col-lg-2">
            <form method="post" action="/addtocart" entype="multipart/form-data">
                @csrf
                    <input type="hidden" value="{{$data->proid}}" name="productid"/>
                    <input type="hidden" value="{{Auth::user()->id}}" name="userid"/>

                    <input type="submit" value="Add to Cart" class="btn btn-info btn-lg">
            </form>
            </div>
        </div>
    </div>
</div>
    @endforeach
@endsection

{{--<div class="picture-padding"><a href="/singleproductview/{{$data->proid}}"><img class="card-img-top " src="{{asset('Sport_Gallery')}}/{{$data->picture}}" alt="product" height="200px" width="120px"></a></div>--}}
{{--<div class="card-body">--}}
    {{--<h5 class="card-title">{{$data->sport}}</h5>--}}
    {{--<div class="item-padding"><p class="card-text"><b>{{$data->brand}} {{$data->color}}/{{$data->item_name}}</b></div></p>--}}
    {{--<div class="item-price"><p class="card-text"><span>Rs.</span> {{$data->item_price}}</p></div--}}

{{--Status:@if($user->status =='waiting')--}}
    {{--{--}}
    {{--<td><a href="#" class="viewPopLink btn btn-default1" role="button" data-id="{{ $user->travel_id }}" data-toggle="modal" data-target="#myModal">Approve/Reject<a></td>--}}
    {{--}--}}
{{--@else{--}}
    {{--<td>{{ $user->status }}</td>--}}
    {{--}--}}
{{--@endif--}}