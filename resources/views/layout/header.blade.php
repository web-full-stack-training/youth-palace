<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
           @include('select')
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
        <a href="/special-programs"  class="{{ (Request::path() === 'special-programs' ? 'active-menu' : '') }}">{{ __('message.Special Programs') }}</a>
        <a href="/clubs" class="{{ (Request::path() === 'clubs' ? 'active-menu' : '') }}">{{ __('message.Clubs') }}</a>
        <a href="/collaboration"  class="{{ (Request::path() === 'collaboration' ? 'active-menu' : '') }}">{{ __('message.Collaboration') }}</a>
        <a href="/volunteering"  class="{{ (Request::path() === 'volunteering' ? 'active-menu' : '') }}">{{ __('message.Volunteering') }}</a>
        <a href="/media"  class="{{ (Request::path() === 'media' ? 'active-menu' : '') }}">{{ __('message.Media') }}</a>
        <a href="/feedback"  class="{{ (Request::path() === 'feedback' ? 'active-menu' : '') }}">{{ __('message.Feedback') }}</a>
        <a href="/about" class="{{ (Request::path() === 'about' ? 'active-menu' : '') }}">{{ __('message.About_Us') }}</a>
    </div>
</div>
<script type="text/javascript">
    const url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
