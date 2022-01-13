@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Contact Info</h5>
    @include('admin.contact.contact-form', [
        'action_url' => route('add.contact.info')
    ])
@endsection
