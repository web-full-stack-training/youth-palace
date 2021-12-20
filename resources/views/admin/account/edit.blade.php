@extends('admin.layout.admin')
@section('content')
<div class="w-100 p-5">
    @if(\Session::has('error'))
        <p class="text-danger">{{ \Session::get('error') }}</p>
    @endif

    <form action="{{ route('edit.account') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="current-password">Password</label>
            <input type="password" name="current_password" class="form-control" id="current-password" placeholder="Current Password">
        </div>
        <hr>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group mt-3">
            <label for="password-confirmation">Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
