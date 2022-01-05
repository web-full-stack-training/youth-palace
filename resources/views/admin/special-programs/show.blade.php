@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
    <div class="about-content-in-admin">
        @if(!$specialProgram)
            <a href="{{ route('show.create.form') }}">
                <button class="btn btn-success rounded">Add Info</button>
            </a>
        @else
            <div class="about-info">

            </div>
        @endif
    </div>
@endsection
