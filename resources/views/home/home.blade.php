@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div id="header-background-image">
        <img class="main-img" src="{{asset('images/bg_image_2%201.jpg')}}">
        <div class="welcome-text">
            <p class="welcome-text-title">
                LET'S MAKE YOUR LIFE HAPPIER
            </p>
            <p class="welcome-text-description">
                HEALTHY LIVING
            </p>
        </div>

    </div>
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="about-div row d-flex justify-content-center">
                <p class="about-p-header">About Pure Hearts</p>
                <div class="col-5">
                    <div class="first-line-about d-flex justify-content-center position-relative">
                        <img class="children" src="{{ asset('images/about.png') }}">
                        <img class="red-heart" src="{{ asset('images/red-heart.png') }}">
                        <img class="green-heart" src="{{ asset('images/green-heart.png') }}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-center flex-column">
                        <p class="text-about">
                            Here to Bring People Together
                            to Help
                        </p>

                        <p class="text-about-second">
                            The majority have suffered alteration all injected humours randomises.

                            There are many variations of passages of lorem ipsum available, but the majority have suffered alteration all form injected humours randomises don't look even slightly belvable.
                        </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="little-divs-about d-flex justify-content-center flex-column">
                        <div class="little-div-first d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('images/volunteers.png')}}" width="110px" height="110px">
                            <p>
                                {{ $volunteers }}
                            </p>
                            <h2>
                                Volunteers
                            </h2>
                        </div>
                        <div class="little-div-second d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('images/beneficiaries.png')}}" width="100px" height="100px">
                            <p>
                                {{ $collaboration }}
                            </p>
                            <h2>
                                Beneficiaries
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 charity-With-Difference-header">
            <div class="charity-With-Difference-div row d-flex justify-content-center">
                <h2> Charity With Difference </h2>
                <div class="col-4 col-xl-3 d-flex justify-content-center p-0">
                    <div class="first-line row ">
                        <div class="first-line-child">
                            <img src="{{asset('images/feature-v1-1%201.png')}}" width="125px" height="110px">
                        </div>
                        <div class="first-line-child-text">
                            <h2 class="mt-1">
                                Test
                            </h2>
                            <p>
                                Test
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xl-3  d-flex justify-content-center p-0">
                    <div class="second-line row" style="margin-left: 30px">
                        <div class="second-line-child">
                            <img src="{{asset('images/feature-v1-2%201.png')}}">
                        </div>
                        <div class="second-line-child-text">
                            <h2>
                                Test
                            </h2>
                            <p>
                                Test
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xl-3  d-flex justify-content-center p-0">
                    <div class="third-line row " style="margin-left: 60px">
                        <div class="third-line-child">
                            <img src="{{asset('images/feature-v1-3%201.png')}}">
                        </div>
                        <div class="third-line-child-text">
                            <h2>
                                Test
                            </h2>
                            <p>
                                Test
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="our-mission-div">
                <h2> Our Mission & Goals </h2>
                <img class="our-mission-div-header-img" src="{{asset('images/mission-goals%201.png')}}">
                <div class="our-mission-child-div">
                    <h3>
                        Small Donations Make Bigger Impact On
                        Someone’s Life, Act Today!
                    </h3>
                    <p>
                        Our mission is to make the world a better place for<br>
                        everyone. Everyone has their rights equally and we<br>
                        want to make sure that people can get food,<br>
                        education, treatment and accommodation for everyone<br>
                        who is living in poverty.
                    </p>
                    <div class="our-mission-child-div-icons">
                        <div class="home-shelter">
                            <img src="{{asset('images/shelter-1456246-1229776%201.png')}}">
                            <p>
                                Home Shelter
                            </p>
                        </div>
                        <div class="water-and-food">
                            <img src="{{asset('images/output-onlinepngtools%20(15)%201.png')}}">
                            <p>
                                Water And Food
                            </p>
                        </div>
                        <div class="love-the-world">
                            <img src="{{asset('images/12-120763_2-hearts-clipart-removebg-preview%201.png')}}">
                            <p>
                                Love The World
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="our-works-container">
                <div class="content">
                    <h2 class="our-works-h2">Our Works</h2>
                    <div class="our-works">
                        @foreach($ourWork as $data)
                            <div class="child-our-works js">
                                <img src="{{ $data['img_path'] }}" alt="">
                                <h2>
                                    {{ $data['title'] }}
                                </h2>
                                <p>
                                    {{ $data['description'] }}
                                </p>
                                <button type="button">
                                    Read more
                                </button>
                            </div>
                        @endforeach
                    </div>

                    <div class="arrow-left">
                        <i class="fal fa-chevron-left"></i>
                    </div>
                    <div class="arrow-right">
                        <i class="fal fa-chevron-right"></i>
                    </div>

            </div>
        </div>


        <div class="col-12">
            <div class="latest-news-container">
                <div class="latest-news">
                    <h2>Latest News</h2>
                    <div class="test">
                        <div class="latest-news-first-part">
                            @foreach($latestNews as $data)
                                <div class="col latest">
                                    <img src="{{ $data['img_path'] }}" alt="">
                                    <h3>
                                        {{ $data['title'] }}
                                    </h3>
                                    <p>
                                        {{ $data['description'] }}
                                    </p>
                                    <button type="button">
                                        Read more
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="latest-news-arrow-left">
                        <i class="fal fa-chevron-left" style="color: black"></i>
                    </div>
                    <div class="latest-news-arrow-right">
                        <i class="fal fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
