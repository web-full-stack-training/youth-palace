@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Collaboration Info</h5>
    @include('admin.collaboration.collaboration-form', [
        'action_url' => route('add.collaboration.info')
    ])
@endsection
