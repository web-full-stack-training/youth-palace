@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Collaboration Info</h5>
    @include('admin.collaboration.collaboration-form', [
        'action_url' => route('edit.collaboration.info'),
        'collaboration_data' => $collaborationData
    ])
@endsection
