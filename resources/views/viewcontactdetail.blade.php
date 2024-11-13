@extends('include/admin')
@section('maincontent')
<div class="container">
    @foreach($contact as $data)
    <div class="contact-message">
<div class="text">
    <div class="text-small">By {{$data->name}}</div>
    <div class="text-extrasmall">
        <i class="fas fa-user-circle fa-fw"></i>{{$data->email}}
    </div>
    <p class="subject" align="center">Subject: <u>{{$data->subject}}</u></p>

    <p class="message">{{$data->message}}</p>
    <div class="date text-right">
        Date: {{$data->created_at}}
    </div>
</div>
    </div>

@endforeach

</div>
@endsection