@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Volunteering Info</h5>
    @include('admin.volunteering.volunteering-form', [
        'action_url' => route('edit.volunteering.info')
    ])
@endsection
