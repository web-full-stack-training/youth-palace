<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<div class="header row d-flex align-items-center m-0">
    <div class="left-side d-flex align-items-center col-md-4 col-xs-12">
        <h4 class="text-white font-weight-bold m-0">Follow Us</h4>
        <div class="social-medias">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>
    <div class="right-side d-flex align-items-center justify-content-end col-md-8 col-xs-12">
        <div class="d-flex align-items-center px-3">
            <i class="fal fa-phone-alt"></i>
            <p class="text-white mb-0">155785824</p>
        </div>
        <div class="d-flex align-items-center px-3">
            <i class="fas fa-map-marker-alt"></i>
            <p class="text-white font-weight-bold mb-0">83 Andy St. Madison NJ 78002</p>
        </div>
        <div class="d-flex align-items-center px-1">
            <i class="far fa-globe"></i>
            <select>
                <option selected>English</option>
                <option value="2">Руский</option>
                <option value="3">Հայերեն</option>
            </select>
        </div>
    </div>
</div>
<div class="sub-header">
    <div class="site-logo">
        <img src="{{ asset('/images/icons/logo.svg') }}" alt="Logo" width="58" height="58">
        <p>Youth </p>
        <p>Palace</p>
    </div>
    <div class="header-menus">
        <a href="/special-programs"  class="{{ (Request::path() === 'special-programs' ? 'active-menu' : '') }}">Special Programs</a>
        <a href="/clubs" class="{{ (Request::path() === 'clubs' ? 'active-menu' : '') }}">Clubs</a>
        <a href="/collaboration"  class="{{ (Request::path() === 'collaboration' ? 'active-menu' : '') }}">Collaboration</a>
        <a href="/volunteering"  class="{{ (Request::path() === 'volunteering' ? 'active-menu' : '') }}">Volunteering</a>
        <a href="/media"  class="{{ (Request::path() === 'media' ? 'active-menu' : '') }}">Media</a>
        <a href="/feedback"  class="{{ (Request::path() === 'feedback' ? 'active-menu' : '') }}">Feedback</a>
        <a href="/about" class="{{ (Request::path() === 'about' ? 'active-menu' : '') }}">About as</a>
    </div>
</div>
