@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Clubs Info</h5>
    @include('admin.clubs.clubs-form', [
        'action_url' => route('edit.clubs.info'),
        'clubs_data' => $clubsData
    ])
@endsection
