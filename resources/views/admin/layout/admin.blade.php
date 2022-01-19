<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Youth Palace - Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
</head>
<body>
<div class="admin-panel">
    <div class="menu active">
        <div class="heading">
            <h5>Youth Palace</h5>
            <div class="menu-icon js-toggle-menu active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="wrap">
            <a href="{{ route('dashboard') }}" class="{{ (Route::currentRouteName() === 'dashboard' ? 'active-menu' : '') }}">Dashboard</a>
            <a href="{{ route('account') }}" class="{{ (Route::currentRouteName() === 'account' ? 'active-menu' : '') }}">Account</a>
            <p class="title">Sections</p>
            <a href="{{ route('special.programs') }}" class="{{ (Route::currentRouteName() === 'special.programs' ? 'active-menu' : '') }}">Special Programs</a>
            <a href="{{ route('clubs') }}" class="{{ (Route::currentRouteName() === 'clubs' ? 'active-menu' : '') }}">Clubs</a>
            <a href="{{ route('collaboration') }}" class="{{ (Route::currentRouteName() === 'collaboration' ? 'active-menu' : '') }}">Collaboration</a>
            <a href="{{ route('volunteering') }}" class="{{ (Route::currentRouteName() === 'volunteering' ? 'active-menu' : '') }}">Volunteering</a>
            <a href="{{ route('media') }}" class="{{ (Route::currentRouteName() === 'media' ? 'active-menu' : '') }}">Media</a>
            <a href="{{ route('contact') }}" class="{{ (Route::currentRouteName() === 'contact' ? 'active-menu' : '') }}">Feedback</a>
            <a href="{{ route('about.us') }}" class="{{ (Route::currentRouteName() === 'about.us' ? 'active-menu' : '') }}">About as</a>
            <a href="{{ route('our.works') }}" class="{{ (Route::currentRouteName() === 'our.works' ? 'active-menu' : '') }}">Our Works</a>

            <div class="dropdown">
                <p>More</p>
                <div class="links">
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                    <a href="">Dropdown Item</a>
                </div>
            </div>
            <p class="title">Legal Section</p>
            <div class="dropdown">
                <p>Documents</p>
                <div class="links">
                    <a href="">Contract</a>
                    <a href="">Employee Handbook</a>
                </div>
            </div>
            <a href="{{ route('contacts') }}" class="{{ (Route::currentRouteName() === 'contacts' ? 'active-menu' : '') }}">Contacts</a>
            <a href="">Terms &amp; Conditions</a>
            <a href="">Copyright Details</a>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <p><span id="time"></span> Admin</p>
            <a href="{{ route('admin.logout') }}">Logout</a>
        </div>
        <div class="body">
            @yield('content')
        </div>
    </div>
</div>
@include('layout.modal')
<div class="dot-spin"></div>
<script src="{{ asset('js/plugin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
</body>
</html>
