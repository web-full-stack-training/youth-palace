<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<div class="container-fluid py-3 mt-3 bg-white footer-container">
    <div class="row d-flex justify-content-center">
        <div class="footer-left-side col-md-5">
            <p class="contact">FOLLOW US</p>
            <div class="social-medias d-flex ">
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
                    <a href="Not Found"><i class="fab fa-slack-hash fa-2x"></i></a>
                </div>
                <div class="links-social">
                    <a href="Not Found"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
            <p class="keep-in-touch">INFORMATION</p>
            <div class="links row">
                <div class="left-links col-6">
                    <a href="#" class="link-dark text-decoration-none">About Fapster app</a>
                    <a href="#" class="link-dark text-decoration-none">Our team</a>
                    <a href="#" class="link-dark text-decoration-none">Things We Like</a>
                </div>
                <div class="right-links col-6 pr-0">
                    <a href="#" class="link-dark text-decoration-none text-right">We Are Hiring</a>
                    <a href="#" class="link-dark text-decoration-none text-right">Privacy Policy</a>
                    <a href="#" class="link-dark text-decoration-none text-right">Terms of Service</a></div>
            </div>
        </div>

        <div class="footer-right-side col-md-7">
            <p class="contact">CONTACT</p>
            <h1 class="contactUs">hello@fapsterapp.com</h1>
            <p class="keep-in-touch">KEEP IN TOUCH</p>

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
                        <textarea id="form-message" name="message" class="form-control contact-form-inputs"
                                  placeholder="Leave your message"
                        >
                        </textarea>
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
        </div>
    </div>
</div>
<script src="{{ asset('js/footer.js') }}"></script>
