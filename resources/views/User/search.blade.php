@extends('include/user')
@section('maincontent')
    <div class="container">
        @if(count($product)>0)
            @foreach($product as $data)
            {{$data->proid}}
                {{$data->item_name}}
            @endforeach
            @endif

    </div>
    @endsection