@extends('include/admin')
@section('maincontent')
    <body>

    <div class="container">

        <div class="row">
            <div class="table-responsive">
                <div class="col-sm-12 col-sm-offset-2">
                    <a href="/adminuserproductverify" class="btn btn-danger btn-sm" >Refresh</a><h3 align="center">User Product Verfication</h3><br/>

                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                        <tr class="alert-dark" align="center">
                            <th class="col-sm-2" > <span >Product</span></th>
                            <th class="col-sm-2" > <span >Product detail</span></th>
                            <th  class="col-sm-1">Qty </th>
                            <th class="col-sm-2">Approved</th>
                            <th class="col-sm-2">Recieved</th>
                            <th class="col-sm-2">Stocked</th>
                            <th class="col-sm-2">Action</th>
                        </tr>
                        </thead>

                        @foreach ($userproduct as $data)

                            <tr>
                                <td align="center">
                                    <img src="{{asset('UserProductImage')}}/{{$data->picture}}" alt="product" height="100px" width="150px">
                                </td>
                                <td>
                                    {{$data->product_name}}
                                    <br>Rs {{$data->retail_price}}
                                    <br>{{$data->color}}
                                    <br>{{$data->brand}}
                                    <br>{{$data->Store_name}}

                                </td>
                                <td align="center">{{$data->quantity}}</td>
                                <form  method="Post" action="/edituserproduct"  enctype="multipart/form-data">
                                    @csrf
                                <td align="center">
                                    <div class="form-group">
                                        <input type="checkbox" name="approve" value="1" {{(($data->approved)=='1')?'checked':''}}/>
                                        <label class="checkbox-text">Approved</label>
                                    </div>
                                </td>

                                  <td  align="center">
                                      <div class="form-group">
                                         <input type="checkbox" name="recieve" value="1" {{(($data->recieved)=='1')?'checked':''}}/>
                                         <label class="checkbox-text">Recieved</label>
                                      </div>
                                  </td>

                                <td  align="center">
                                    <div class="form-group">
                                         <input type="checkbox" name="stock" value="1"  {{(($data->stocked)=='1')?'checked':''}}/>
                                        <label class="checkbox-text">Stocked</label>
                                    </div>
                                </td>

                                <td>
                                    <input type="hidden" value="{{$data->productid}}" name="productid"/>
                                       <input type="submit" value="Change" class="btn btn-danger btn-sm">
                                </td>
                                </form>
                            </tr>
                        @endforeach

                    </table>


                    <a href="/adminuserproductverify" class="btn btn-danger" >Refresh</a>
                </div>
            </div>
        </div>
    </div>
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


