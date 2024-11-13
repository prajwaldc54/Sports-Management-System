@extends('include/index')

@section('navbar')
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/adminhome">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Product</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="/product">Add product</a>
                    <a class="dropdown-item" href="/viewproduct">View Product</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fa fa-folder"></i>
                    <span>Verification</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">

                    <a class="dropdown-item" href="/adminuserproductverify">User Product</a>
                    <a class="dropdown-item" href="/orderverify">Order Verify</a>
                    <a class="dropdown-item" href="/userproductorderverify">User Product Order</a>

                </div>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="/adminuserproductverify">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--<span>User product</span></a>--}}
            {{--</li>--}}

        </ul>
    </div>
@endsection
    @section('login')

    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link" href="/contactdetail">
                <i class="fas fa-envelope fa-fw"></i>
            </a>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <span>   {{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>
    @endsection