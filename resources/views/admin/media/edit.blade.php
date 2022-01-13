@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Media Info</h5>
    @include('admin.media.media-form', [
        'action_url' => route('edit.media.info'),
        'media_data' => $mediaData
    ])
@endsection
