@extends('frontend.layouts.master')
@section('content')
@section('title', 'faq')
    <!--home page slider start-->
    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/faqs.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/faqs.webp')}}" class="img-fluid" alt="banner">
        </div>
    </section>
    <!--home page slider start-->


    <!-- banner area 1 -->
    <section class="khadayat-samaj-sponser animate fadeInLeft one">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad1.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner1.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    <!-- faq's section  -->
    <section class="faq-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="schema-faq wp-block-yoast-faq-block">
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">1. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">2. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">3. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">4. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">5. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">6. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="khadayat-samaj-matrimonials animate fadeInRight three">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="matrimonials-samaj">
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men2.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="matrimonilas-title">
                        <h4>Matrimonials Ad 2 Banner</h4>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="matrimonials-samaj">
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Fixed Banner Donate Now -->
    <section class="khadayat-donate-join animate fadeInLeft four">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="#">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/donation.webp')}}" class="img-fluid" alt="donation">
                                    <h4>Donate Now</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="#">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/join.webp')}}" class="img-fluid" alt="Join Us">
                                    <h4>Join Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="tel:+91 9821020582">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/call.webp')}}" class="img-fluid" alt="Call Us">
                                    <h4>Call Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord donate-bord2">
                        <div class="khadyat-donate-detail">
                            <a target="_blank" href="https://wa.me/919821020582?text=Welcome%20to%20Khadayata%20Samaj%20Community">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/whats.webp')}}" class="img-fluid" alt="Whats App Us">
                                    <h4>WhatsApp Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Banner Area 3 - Sponser Banner -->
    <section class="khadayat-samaj-sponser animate fadeInRight five">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad6.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner4.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>
@endsection
@section('scripts')
<script>
        // faq java 
        jQuery(document).ready(function () {
            jQuery(".wp-block-yoast-faq-block .schema-faq-section:first-child").addClass("active").children(".schema-faq-answer").slideDown();//Remove this line if you dont want the first one to be opened automatically.
            jQuery(".schema-faq-question").on("click", function () {
                if (jQuery(this).parent().hasClass("active")) {
                    jQuery(this).next().slideUp();
                    jQuery(this).parent().removeClass("active");
                }
                else {
                    jQuery(".schema-faq-answer").slideUp();
                    jQuery(".schema-faq-section").removeClass("active");
                    jQuery(this).parent().addClass("active");
                    jQuery(this).next().slideDown();
                }
            });
        });
    </script>
    
@endsection