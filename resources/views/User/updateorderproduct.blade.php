{{--@extends('include/bootstrapinclude')--}}
@extends('include/user')
@section('maincontent')

    @foreach($updateproduct as $data)
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="image-pad"> <img class="card-img-top " src="{{asset('Sport_Gallery')}}/{{$data->picture}}" alt="product" height="410px" ></div></div>

            <div class="col-lg-5">
                <div class="pro-detail">
                    <div class="page-header">
                        <div class="product-title">{{$data->brand}} {{$data->brand}}/{{$data->color}}/{{$data->item_name}} {{$data->accessories}}
                            For {{$data->gender}}
                        </div>
                        <div class="brand"> <h5>By {{$data->supplier}}</h5></div>
                    </div>
                    <form method="post" action="/updateorder" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{$data->proid}}" name="productid"/>
                            <div class="col-lg-4">
                                <i class="fa fa-chart-area"></i>
                                <span>Size</span>

                                @if($data->accessories=='Shoes' or $data->accessories=='Boots' )

                                    <select name="size" class="form-control">
                                        <option value="{{$data->Size}}">{{$data->Size}}</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                    </select>

                                @elseif ($data->accessories=='Clothes'or $data->accessories=='Jersey')

                                    <select name="size" class="form-control">
                                        <option value="{{$data->Size}}">{{$data->Size}}</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>

                                    </select>
                                @elseif ($data->accessories=='Ball')

                                    <select name="size" class="form-control">
                                        <option value="{{$data->Size}}">{{$data->Size}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                @else

                                    <option name="size"  hidden></option>
                                    <span class="input-group"><i class="fa fa-save"></i></span>
                                    <span>Save Rs 251 </span>

                                @endif
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Quantity</span>
                                <input type="number" name="quantity" value="{{$data->Quantity}}" placeholder="Quantity" class="form-control" required>
                            </div>
                        </div><br/>


                        <div class="row">
                            <div class="col-lg-4">
                                <span><b>Rs {{  $data->item_price}}</b></span><br/>
                                <u>{{$data->item_price+0.16*$data->item_price}}   </u>  <b><input type="button" class="btn btn-warning btn-sm" value="16% off" disabled></b>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Delivery Address</span>
                                <input type="text" name="address" placeholder="Address" value="{{$data->Delivery_address}}" class="form-control" requireds>
                            </div>
                            <input type="hidden" value="{{$data->order_id}}" name="orderid"/>
                        </div><br/><br/>
                        <div class="row">
                            <input type="submit" value="Update" class="btn btn-warning btn-lg"><div class="col-lg-1"></div>
                        <a href="/orderdetail" class="btn btn-primary">Back</a></div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

