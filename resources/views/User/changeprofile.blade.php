@extends('include/user')
@section('maincontent')
<div class="container">
    <h3 >Change Profile</h3><br/>
    @foreach($userdetail as $data)
    <form  method="Post" action="/updateprofile" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-user"></i>
                    <span><label>First Name</label></span>
                    <input type="text" name="firstname" placeholder="First Name" value="{{$data->name}}" class="form-control" required>
                </div>

                <div class="col-lg-4">
                    <i class="fa fa-user"></i>
                    <span><label>Last Name</label></span>
                    <input type="text" name="lastname" placeholder="Last Name" value="{{$data->last_name}}" class="form-control" required>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-phone"></i>
                    <span><label>Phone Number</label></span>
                    <input type="text" name="phone" placeholder="Phone number" value="{{$data->phone}}"class="form-control" required>
                </div>

                <div class="col-lg-4">
                    <i class="fa fa-address-book"></i>
                    <span><label>Address:</label></span>
                    <input type="text" name="address" placeholder="Address" value="{{$data->address}}" class="form-control" required>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa fa-envelope"></i>
                    <span><label>E-mail Address</label></span>
                    <input type="text" name="email" placeholder="E-mail address" value="{{$data->email}}" class="form-control" required>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-transgender"></i>
                    <span><label>Gender:  </label></span><br>
                    <input type="radio" name="gender" value="Male"  {{(($data->gender)=='Male')?'checked':''}}>Male
                    <input type="radio" name="gender" value="Female" {{(($data->gender)=='Female')?'checked':''}}>Female<br/>
                </div>
            </div><br>
            <div class="row">
            <div class="col-lg-4">
                <i class="fa fa-lock"></i>
                <span><label>Password:</label></span>
                <input type="password" name="password" placeholder="Password" value="{{$data->password}}" class="form-control" required>
            </div>
            </div>
        </div><br/>
            <br/>
            <input type="hidden" value="{{$data->id}}" name="userid"/>
            <div class="signupbut"><input type="submit" value="Change Profile" class="btn btn-danger"></div>

    </form>
        @endforeach
</div>
    @endsection