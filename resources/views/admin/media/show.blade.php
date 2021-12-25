@extends('admin.layout.admin')
@section('content')
    <h2>Active Info {{ $activeInfoCount }}</h2>
    <form method="post">
        <button type="submit" class="btn btn-primary rounded-3 mt-3">View more</button>
    </form>
@endsection
