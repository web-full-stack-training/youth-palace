@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
    <div class="about-content-in-admin">
        @if(!$about)
        <a href="about-us/create">
            <button class="btn btn-success rounded">Add Info</button>
        </a>
        @else
            <h1>About Us</h1>
            <div class="about-info d-flex align-items-center justify-content-center">
                  <img src="{{ $about->image_path }}" alt="" width="300px" height="300px">
                  <div class="text d-flex justify-content-center align-items-center flex-column">
                      <h2 class="mb-5">{{ $about->title }}</h2>
                      <div class="content p-2">
                          <p>{{ $about->description }}</p>
                      </div>
                  </div>
            </div>
            <a href="about-us/edit">
                <button class="btn btn-success rounded mt-2">Edit</button>
            </a>

        @endif
    </div>
@endsection
