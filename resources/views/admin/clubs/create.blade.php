@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Clubs Info</h5>
    @include('admin.clubs.clubs-form', [
        'action_url' => route('add.clubs.info')
    ])
@endsection
