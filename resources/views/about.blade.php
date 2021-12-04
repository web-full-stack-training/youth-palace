@extends('app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <div class="about-us">
        <h1 class="info">About Us</h1>
        <img src="{{asset('/photo/imgbin-volunteering-portable-network-graphics-community-computer-icons-heart-volunteers-g11EER6PJ9c7hQ7WWSyiSrfA1-removebg-preview 1.png)')}}">
        <div class="text">
            <h2> Who are we</h2>
            <div class="content">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
@endsection
