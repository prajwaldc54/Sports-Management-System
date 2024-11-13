<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Shop</title>
    <link rel="stylesheet" href="{{asset("indexpage/css/css/formstyle.css")}}"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset("indexpage/css/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <link href="{{asset("indexpage/css/vendor/bootstrap/css/bootstrap.css")}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset("indexpage/css/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset("indexpage/css/vendor/datatables/dataTables.bootstrap4.css")}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("indexpage/css/css/sb-admin.css")}}" rel="stylesheet">

</head>

<body id="page-top">


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand" href="index">Sport Shop</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-align-justify"></i>
    </button>


    @yield('login')
</nav>

<!-- /#wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
   @yield('navbar')

    <div id="content-wrapper">
        <!-- /.container-fluid -->
        {{--<div class="container-fluid">--}}

            {{--<!-- Breadcrumbs-->--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item">--}}
                {{--</li>--}}
            {{--</ol>--}}



            {{--<!-- Sticky Footer -->--}}
        {{--</div>--}}
        @if(session()->has('Success'))
            <div class="row">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session()->get('Success')}}
                </div>
            </div>
        @endif

        {{--@if(count($errors)>0)--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li class="alert alert-danger"{{$error}}></li>--}}
            {{--</ul>--}}
        {{--@endforeach--}}
    {{--@endif--}}

    @yield('maincontent')
        <!-- /.content-wrapper -->

    </div>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-lg" value="Logout" href="{{ route('logout') }}"

                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>


                </div>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<script src="{{asset("indexpage/css/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("indexpage/css/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>



<!-- Page level plugin JavaScript-->
{{--<script src="{{asset("indexpage/css/vendor/chart.js/Chart.min.js")}}"></script>--}}
<script src="{{asset("indexpage/css/vendor/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("indexpage/css/vendor/datatables/dataTables.bootstrap4.js")}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset("indexpage/js/sb-admin.min.js")}}"></script>

<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/javascript/bootstrap.min.js')}}"></script>


@yield('tablescript')

{{--<footer class="footer">--}}
    {{--<div class="container my-auto">--}}
        {{--<div class="copyright text-center my-auto">--}}
            {{--<span>Copyright © Your Website 2018</span>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}
</body>

</html>
