@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit About Info</h5>
    @include('admin.about.about-form', [
        'action_url' => route('edit.about.info'),
        'about_data' => $aboutData
    ])
@endsection
