<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset("css/style/core-style.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/style/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/style/bootstrap.css")}}"/>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="signup">
    <div class="row ">


    <div class="col-lg-6">
        <div id="UI">

            <form  method="Post" action="/adduser" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <div class="page-header"><h3 class="font-bold ">Sign up to our Store</h3>
                    {{--<button type="button" class="close" data-dismiss="modal"> &times;</input>--}}
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-user"></i> <label>First Name</label></span>
                        <input type="text" name="firstname" placeholder="First Name" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-user"></i><label>Last Name</label></span>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                    </div>
                </div><br/>
                <div class="row">
                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-user"></i><label>Phone Number</label></span>
                        <input type="text" name="phone" placeholder="Phone number" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-home"></i><label>Address:</label></span>
                        <input type="text" name="address" placeholder="Address" class="form-control">
                    </div>
                </div>
                    <div class="row">
                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-gender"></i><label>Gender:</label></span>
                        <input type="radio" name="gender" value="Male" >Male
                        <input type="radio" name="gender" value="Female" >Female<br/>
                    </div>
                    </div>
                <br/>
                <div class="row">
                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-envelope"></i>  <label>E-mail Address</label></span>
                        <input type="text" name="email" placeholder="E-mail address" class="form-control">
                    </div>

                    <div class="col-lg-4">
                        <span class="input-group"><i class="glyphicon glyphicon-lock"></i><label>Password:</label></span>
                        <input type="text" name="password" placeholder="Password" class="form-control">
                    </div>
                </div><br/>

                <div class="signupbut"><input type="submit" value="Create Your Account" class="btn btn-danger btn-lg"></div><br/>


                <label>By signing up you aggree with Terms and Privacy Policy</label><br/>
                    Have an account? <a href="#" type="button" class="btn btn-link btn-md">Login</a>
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>

</div>
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/javascript/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>


</body>

</html>