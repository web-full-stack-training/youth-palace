@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Volunteering Info</h5>
    @include('admin.volunteering.volunteering-form', [
        'action_url' => route('add.volunteering.info')
    ])
@endsection
