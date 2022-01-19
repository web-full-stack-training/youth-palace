@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Our Works Info</h5>
    @include('admin.our-works.our-works-form', [
        'action_url' => route('add.our.works.info')
    ])
@endsection
