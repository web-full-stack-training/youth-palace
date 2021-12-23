@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create About Info</h5>
@include('admin.about.about-form', [
    'action_url' => route('add.about.info')
])
@endsection
