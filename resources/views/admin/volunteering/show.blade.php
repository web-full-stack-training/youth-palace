@extends('admin.layout.admin')
@section('content')
<h1>volunteering</h1>
<link rel="stylesheet" href="{{ asset('css/admin/volunteering.css') }}">
<div class="volunteering-content-in-admin">
    @if(!$volunteering)
        <a href="{{ route('show.create.form') }}">
            <button class="btn btn-success">Add Info</button>
        </a>
    @else
        <div class = "volunteer-body">

        </div>
    @endif
</div>
@endsection
