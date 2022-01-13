@extends('app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="about-us">
        <h1 class="info text-center">About Us</h1>
        <div class="about-body d-flex mt-5">
            <img src="{{ $about->image_path }}">
            <div class="text d-flex justify-content-center align-items-center flex-column">
                <h2 class="mb-5">{{ $about->title }}</h2>
                <div class="content">
                    <p>{{ $about->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
