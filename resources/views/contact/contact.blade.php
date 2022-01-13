@extends('app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <div class="contact-us">
        <div class="contact-us-page">
            <h2>Contact us</h2>
            <div class="contact-page">
                <p>CONTACT</p>
                @if($contact)
                    <div class="contact-page-information">
                        <h1>{{ $contact->email }}</h1>
                        <h1>{{ $contact->telephone }}</h1>
                        <h1>{{ $contact->phone_number }}</h1>
                    </div>
                @endif
            </div>

            <form class="form-card">
                <div class="row  text-left">
                    <div class="form-group col-sm-5 flex-column d-flex">
                        <input type="text" id="fname" class="contact-form-inputs" name="fname" placeholder="Your name">
                        <small class="text-danger error-message">Name is required</small>
                    </div>
                    <div class="form-group col-sm-5 flex-column d-flex">
                        <input type="text" id="email" class="contact-form-inputs" name="email" placeholder="E-mail">
                        <small class="text-danger error-message">Email is required</small>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <label for="form-message">
                            <span class="text-danger"></span>
                        </label>
                        <textarea  id="form-message" name="message"  class="form-control contact-form-inputs"
                                   placeholder="Leave your message"></textarea>
                        <small class="text-danger error-message">Message is required</small>
                    </div>
                    <div class="form-group col-sm-4">
                        <button type="button" class="btn-block btn-primary send-contact-form-button">
                            Send
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="contact-us-icons d-flex">
                <div class="links-social">
                    <a href="#" target="_blank">
                        <i class="fas fa-home-lg-alt home-icon"></i>
                    </a>
                </div>
                <div class="links-social">
                    <a href="https://www.facebook.com/YPCNCO" target="_blank">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                </div>
                <div class="links-social">
                    <a href="https://am.linkedin.com/in/youth-palace-579a44203" target="_blank"><i
                            class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
                <div class="links-social">
                    <a href="#"><i class="fab fa-slack-hash fa-2x"></i></a>
                </div>
                <div class="links-social">
                    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/footer.js') }}"></script>
@endsection
