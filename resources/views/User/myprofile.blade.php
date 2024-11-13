@extends('include/user')
@section('maincontent')
    <div class="container">
        <div class="col-sm-12 col-sm-offset-2">
        <h3 align="center">My profile</h3><br/>
            @foreach ($userdetail as $data)
                <div class="inline"></div>
                <div class="gender-photo col-lg-4">
                    @if($data->gender=='Male')

                        <img src="{{asset('image')}}/male.jpg" alt="userimage" height="300px" width="250px">

                    @else

                        <img src="{{asset('image')}}/female.jpg" alt="userimage" height="300px" width="250px">

                    @endif
                </div>
            <div class="table-hori col-lg-8">
            <table class="table table-striped table-dark table-hover ">
                <tr >
                    <td class="col-lg-6">First Name</td>
                    <td>{{$data->name}}</td>
                </tr>

                    <tr>
                        <td>Last Name</td>
                        <td>{{$data->last_name}}</td>
                    </tr>
                <tr>
                    <td>Phone number</td>
                    <td>{{$data->phone}}</td>
                </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$data->address}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{$data->gender}}</td>
                    </tr>

                @endforeach
            </table>

                <a href="/changeprofile/{{Auth::user()->id}}" class="btn btn-primary" >Change Profile</a>
            </div>
        </div>
    </div>
@endsection
