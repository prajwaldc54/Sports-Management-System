@extends('include.admin')
@section('maincontent')
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">User Product Order Verfication</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-4" colspan="2"> <span >Order detail</span></th>
                            <th  class="col-sm-2">Quantity </th>
                            <th class="col-sm-2">Price</th>
                            <th class="col-sm-2">Delivered</th>
                            <th class="col-sm-2">Action</th>
                        </tr>
                        </thead>

                        @foreach ($order as $data)
                            <tr >
                                <td align="center">
                                    <img src="{{asset('UserProductImage')}}/{{$data->picture}}" alt="product" height="100px" width="150px"></td>
                                <td> {{$data->brand}} /{{$data->product_name}} {{$data->accessories}}
                                    ({{$data->color}}/{{$data->Size}})
                                    <div class="detail">
                                        <br> {{$data->product_name}}
                                        <br> {{$data->accessories}}
                                        <br> Color: {{$data->color}}
                                    </div>



                                </td>
                                <td align="center">{{$data->Quantity}}</td>
                                <td align="center">Rs {{$data->retail_price}}</td>
                                <form  method="Post" action="/userproductorderupdate"  enctype="multipart/form-data">
                                    @csrf
                                <td  align="center">
                                    <div class="form-group">
                                        <input type="checkbox" name="deliver" value="1"  {{(($data->Delivered)=='1')?'checked':''}}/>
                                        <label class="checkbox-text">Delivered</label>
                                    </div>
                                </td>
                                    <td align="center">
                                        <input type="hidden" value="{{$data->order_id}}" name="orderid"/>
                                        <input type="submit" value="Change" class="btn btn-danger btn-sm">
                                    </td>
                                </form>
                            </tr>
                        @endforeach


                    </table>

                    <a href="/userproductorderverify" class="btn btn-danger" >Refresh</a>
                </div></div></div></div>
    @endsection
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/javascript/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    @section('tablescript')
        <script type="text/javascript">
            $(document).ready(function()
            {
                $(".table").DataTable();
            });
        </script>
    @endsection
    </body>
    </html>

