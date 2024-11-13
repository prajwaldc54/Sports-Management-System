@extends('include/user')
@section('maincontent')
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Wish List</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-6" colspan="2"> <span >Add to Cart</span></th>
                            <th class="col-sm-2">Price</th>
                            <th class="col-sm-3" colspan="2">Action</th>

                        </tr>
                        </thead>

                        @foreach ($cart as $data)
                            <tr >
                                <td align="center">
                                    <img src="{{asset('Sport_Gallery')}}/{{$data->picture}}" alt="product" height="100px" width="150px"></td>
                                <td> {{$data->brand}} /{{$data->item_name}} {{$data->accessories}}
                                    For {{$data->gender}} ({{$data->color}}
                                    <div class="detail">
                                        <br> {{$data->item_name}}
                                        <br> {{$data->accessories}} for {{$data->gender}}
                                        <br> Color: {{$data->color}}
                                    </div>

                                </td>

                                <td align="center">Rs {{$data->item_price}}</td>
                                <td align="center">
                                    <span class="action"><a href="/addtocartproductview/{{$data->product_id}}"  class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a></span>
                                </td>
                                <td align="center">
                                    <form method="post" action="/deletecart" entype="multipart/form-data">
                                        @csrf
                                        <div class="item-price">
                                            <input type="hidden" value="{{$data->cart_id}}" name="cartid"/>
                                            <input type="hidden" value="{{Auth::user()->id}}" name="userid"/>

                                            <button type="submit" value="Delete" class="btn btn-info btn-sm"><i class="fa fa-trash-alt"></i></button>
                                        </div>
                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </table>


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

