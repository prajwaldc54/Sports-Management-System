@extends('include/admin')
@section('maincontent')
<body>

<div class="container">

     <div class="row">
        <div class="table-responsive">
         <div class="col-md-12 col-sm-offset-2">
    <h3 align="center">Product table</h3><br/>
        <table class="table table-striped table-dark  table-hover ">
                <thead class="thead-dark">
                    <tr class="alert-dark" align="center">
                        <th>ID</th>
                        <th>Item </th>
                        <th >Price</th>
                        <th>Color</th>
                        <th>Sports</th>
                        <th>Brands</th>
                        <th>Accessories</th>
                        <th>Supplier</th>
                        <th>Photo</th>
                        <th colspan="2">Action</th>

                    </tr>
                </thead>

@foreach ($product as $data)
                <tr align="center">
                    <td>{{$data->proid}}</td>
                    <td>{{$data->item_name}}</td>
                    <td>{{$data->item_price}}</td>
                    <td>{{$data->color}}</td>
                    <td>{{$data->sport}}</td>
                    <td>{{$data->brand}}</td>
                    <td>{{$data->accessories}}</td>
                    <td>{{$data->supplier}}</td>
                    <td><img src="{{asset('Sport_Gallery')}}/{{$data->picture}}" alt="product" height="100px" width="150px"></td>
                    <td align="center"><span class="action"><a href="/selectid/{{$data->proid}}">
                                <i class="fa fa-edit"></i></a></span></td>
                    <td><span class="action"><a  href="/deleteproduct/{{$data->proid}}" >
                                <i class="fa fa-trash-alt"></i></a></span></td>
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

