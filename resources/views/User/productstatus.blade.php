@extends('include/user')
@section('maincontent')
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <h3 align="center">Product Status</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-4" colspan="2"> <span >Product</span></th>
                            <th  class="col-sm-3">Status </th>
                            <th class="col-sm-2">Quantity</th>
                            <th class="col-sm-4" colspan="2">Status</th>
                            <th class="col-sm-3"></th>

                        </tr>
                        </thead>

                        @foreach ($userproduct as $data)
                            <tr align="center">
                                <td align="center">
                                    <img src="{{asset('UserProductImage')}}/{{$data->picture}}" alt="product" height="100px" width="150px">
                                </td>
                                <td> {{$data->product_name}}</td>
                                <td align="center">@if($data->approved=='0')
                                                    <div class="wrong">Not Approved</div>
                                                    @else
                                                      <div class="right">Approved</div>
                                                    @endif
                                </td>
                                <td >{{$data->quantity}}</td>
                                  <td>  @if($data->recieved=='0')
                                       <div class="line-wrong">In transit</div>
                                    @else
                                          <div class="line-right">In transit </div>
                                    @endif</td>
                                <td>
                                    @if($data->stocked=='0')
                                        <div class="line-wrong">Stocked</div>
                                    @else
                                        <div class="line-right">Stocked</div>
                                    @endif</td>
                                <td align="center">
                                    @if($data->recieved=='0')
                                        <form method="post" action="/deleteuserproduct" entype="multipart/form-data">
                                            @csrf
                                            <div class="item-price">
                                                <input type="hidden" value="{{$data->productid}}" name="productid"/>
                                                <input type="hidden" value="{{Auth::user()->id}}" name="userid"/>

                                                <button type="submit" value="Delete" class="btn btn-info btn-sm"><i class="fa fa-trash-alt"></i></button>
                                            </div>
                                        </form>
                                @endif
                                </td>
                            </tr>
                        @endforeach


                    </table>
                    <a href="/addnewproduct" class="btn btn-danger" >Add new product</a>

                </div></div></div></div>
    @endsection

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

