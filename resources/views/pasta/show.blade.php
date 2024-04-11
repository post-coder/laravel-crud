@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>{{$pasta->title}}</h1>

        <p>
            {{$pasta->description}}
        </p>

        <img src="{{$pasta->src}}" alt="">
    </div>
@endsection