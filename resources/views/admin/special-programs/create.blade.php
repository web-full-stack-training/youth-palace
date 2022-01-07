@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Create About Info</h5>
    @include('admin.special-programs.special-form', [
        'action_url' => route('add.specialProgram.info')
    ])
@endsection
