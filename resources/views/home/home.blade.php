@extends('app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div>
        <img class="main-img" src="{{asset('images/bg_image_2%201.jpg')}}">
        <div class="div">
            <p class="one">
                LET'S MAKE YOUR LIFE HOPPIER
            </p>
            <p class="two">
                HEALITY LIVING
            </p>
        </div>

    </div>
    <div class="about-div">
        <p class="about-p-header">About Pure Hearts</p>
        <div class="first-line-about">
            <img class="children" src="{{asset(' images/about-1%201.png')}}">
            <img class="red-heart" src="{{asset('images/heart-2%201.png')}}">
            <img class="green-heart" src="{{asset('images/heart-3%201.png')}}">
        </div>
        <div>
            <p class="text-about">
                Here to Bring People Together<br>
                to Help
            </p>

            <p class="text-about-second">
                The majority have suffered alteration all injected humours randomises.
                <br><br>
                There are many variations of passages of lorem ipsum available, but the majority have suffered alteration all form injected humours randomises don't look even slightly belvable.
            </p>
        </div>
        <div class="little-divs-about">
            <div class="little-div-first">
                <img>
                <p>
                    357
                </p>
                <h2>
                    Volunteers
                </h2>
            </div>
            <div class="little-div-second">
                <img>
                <p>
                    1907
                </p>
                <h2>
                    Beneficiaries
                </h2>
            </div>
        </div>
    </div>

    <div class="charity-With-Difference-div">
        <h2> Charity With Difference </h2>
        <div class="first-line">
            <div class="first-line-child">
                <img src="{{asset('images/feature-v1-1%201.png')}}">
            </div>
            <h2>
                Get Inspire And Help
            </h2>
            <p>
                Please donate to <br>
                change the world if <br>
                you are inspired by us.
            </p>
            <button type="button">
                Read more
            </button>
        </div>
        <div class="second-line">
            <div class="second-line-child">
                <img src="{{asset('images/feature-v1-2%201.png')}}">
            </div>
            <h2>
                Send Us Donations
            </h2>
            <p>
                Want to help with this<br>
                pandemic, please join<br>
                us as a volunteer.
            </p>
            <button type="button">
                Read more
            </button>
        </div>
        <div class="third-line">
            <div class="third-line-child">
                <img src="{{asset('images/feature-v1-3%201.png')}}">
            </div>
            <h2>
                Send Us Donations
            </h2>
            <p>
                Want to help with this<br>
                pandemic, please join<br>
                us as a volunteer.
            </p>
            <button type="button">
                Read more
            </button>
        </div>
    </div>

    <div class="our-mission-div">
        <h2> Our Mission & Goals </h2>
        <img class="our-mission-div-header-img" src="{{asset('images/mission-goals%201.png')}}">
        <div class="our-mission-child-div">
            <h2>
                Small Donations Make Bigger Impact On
                Someone’s Life, Act Today!
            </h2>
            <p>
                Our mission is to make the world a better place for<br>
                everyone. Everyone has their rights equally and we<br>
                want to make sure that people can get food,<br>
                education, treatment and accommodation for everyone<br>
                who is living in poverty.
            </p>
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

    <div class="width-100">
        <div class="content">
            <h2 class="our-works-h2">Our Works</h2>
            <div class="our-works">
                <div class="first-child-our-works js">
                    <img src="{{asset('25%20Ways%20to%20Volunteer%20in%20Your%20Community%201.png')}}" alt="">
                    <h2>
                        Reusable components available for every layout
                    </h2>
                    <p>
                        Let me explain the meaning reusable component as I feel it contextually.
                    </p>
                    <button type="button">
                        Read more
                    </button>
                </div>
                <div class="second-child-our-works js">
                    <img src="{{asset('Cheap-Affordable-Volunteer-Programs-Header%201.png')}}" alt="">
                    <h2>
                        Reusable components available for every layout
                    </h2>
                    <p>
                        Let me explain the meaning reusable component as I feel it contextually.
                    </p>
                    <button type="button">
                        Read more
                    </button>
                </div>
                <div class="first-child-our-works-first js">
                    <img src="{{asset('25%20Ways%20to%20Volunteer%20in%20Your%20Community%201.png')}}" alt="">
                    <button type="button">
                        Read more
                    </button>
                </div>
                <div class="second-child-our-works-second js">
                    <img src="{{asset('Cheap-Affordable-Volunteer-Programs-Header%201.png')}}" alt="">
                    <button type="button">
                        Read more
                    </button>
                </div>
            </div>
            <div class="arrow-left">
                <i class="fal fa-chevron-left"></i>
            </div>
            <div class="arrow-right">
                <i class="fal fa-chevron-right"></i>
            </div>

        </div>
    </div>


    <div id="ara">
        <div class="latest-news">
            <h2>Latest News</h2>
            <div class="test">
                <div class="latest-news-first-part">
                    <div class="col latest">
                        <img src="{{asset('images (2) 1.jpg')}}" alt="">
                        <h3>
                            Made by reusable components
                        </h3>
                        <p>
                            Let me explain the meaning reusable component as I feel it contextually.
                        </p>
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src="{{asset('images/community-award-2%201.jpg')}}" alt="">
                        <h3>
                            Made by reusable components
                        </h3>
                        <p>
                            Let me explain the meaning reusable component as I feel it contextually.
                        </p>
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src="{{asset('images/prepare-for-a-successful-volunteer-program-in-3-thoughtful-steps-588a393c7d0b5%201.jpg')}} "
                             alt="">
                        <h3>
                            Made by reusable components
                        </h3>
                        <p>
                            Let me explain the meaning reusable component as I feel it contextually.
                        </p>
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src="{{asset('images/Youth-for-Integration-India-2%201.jpg')}} " alt="">
                        <h3>
                            Made by reusable components
                        </h3>
                        <p>
                            Let me explain the meaning reusable component as I feel it contextually.
                        </p>
                        <button type="button">
                            Read more
                        </button>
                    </div>


                    <div class="col latest" style="margin-left: 20px">
                        <img src="{{asset('images/images (2) 1.jpg')}}" alt="">
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src="{{asset('images/community-award-2%201.jpg')}} " alt="">
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src="{{asset('images/prepare-for-a-successful-volunteer-program-in-3-thoughtful-steps-588a393c7d0b5%201.jpg')}} "
                             alt="">
                        <button type="button">
                            Read more
                        </button>
                    </div>
                    <div class="col latest">
                        <img src=" {{asset('images/Youth-for-Integration-India-2%201.jpg')}}" alt="">
                        <button type="button">
                            Read more
                        </button>
                    </div>
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
@endsection
