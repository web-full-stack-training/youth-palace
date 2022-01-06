<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Youth Palace - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
</head>
<body>
<div class="login-form">
    <form action="{{ route('admin.login.post') }}" method="post">
        {!! csrf_field() !!}
        <h2 class="text-center">Admin Login</h2>
        {{ \Session::forget('success') }}
        @if(\Session::get('error'))
            <p class="text-danger p-0">
                {{ \Session::get('error') }}
            </p>
        @endif
        <div class="form-group">
            <input type="text" class="form-control text-field" name="username" placeholder="Username" required="required">
            @if ($errors->has('username'))
                <span class="help-block font-red-mint">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control text-field" name="password" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="help-block font-red-mint">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
</div>
</body>
</html>
