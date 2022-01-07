@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Contact Info</h5>
    @include('admin.contact.contact-form', [
        'action_url' => route('edit.contact.info'),
        'contact_data' => $contactData
    ])
@endsection
