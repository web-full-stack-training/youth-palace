@extends('app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">

    <div class="about-us">
        <h1 class="info">About Us</h1>
        <img src="{{ $about->image_path }}">
        <div class="text">
            <h2>{{ $about->title }}</h2>
            <div class="content">
                <p>{{ $about->description }}</p>
            </div>
        </div>
    </div>
@endsection
