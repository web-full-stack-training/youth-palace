@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create Special-Programs Info</h5>
    @include('admin.special-programs.special-form', [
        'action_url' => route('add.special.program.info')
    ])
@endsection
