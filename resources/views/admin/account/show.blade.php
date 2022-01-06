@extends('admin.layout.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/account.css') }}">
<div class="admin-account-card">
    <div class="w-100 d-flex justify-content-end">
        <a href="{{ route('show.edit.account') }}">
            <i class="fa fa-pencil edit-account-info" aria-hidden="true"></i>
        </a>
    </div>
    <div class="row">
        <div class="col-12">
            <strong>User Name</strong>
            <p class="admin-account-details">{{ $userName }}</p>
        </div>
        <div class="col-12">
            <strong>Password</strong>
            <p class="admin-account-details">*******</p>
        </div>
    </div>
</div>
@endsection
