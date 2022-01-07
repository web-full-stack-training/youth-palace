@extends('admin.layout.admin')
@section('content')
    <h5 class="text-center">Edit Special Programs Infos</h5>
    @include('admin.special-programs.special-form', [
        'action_url' => route('edit.SpecialProgram.info'),
        'special-programs_data' => $specialProgramData
    ])

@endsection
