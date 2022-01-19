@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Our Works Info</h5>
    @include('admin.our-works.our-works-form', [
        'action_url' => route('edit.our.works.info'),
        'our_works_data' => $ourWorksData
    ])
@endsection
