@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Media Info</h5>
    @include('admin.media.media-form', [
        'action_url' => route('add.media.info')
    ])
@endsection
