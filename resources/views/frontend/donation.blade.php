@extends('frontend.layouts.master')
@section('content')
@section('title', 'board-members')

    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/donation1.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/donation1.webp')}}" class="img-fluid" alt="banner">
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

    <!-- Contact us of Khadayata Samaj section  --> 
    <section class="contact-us-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field" style="padding: 60px 340px 255px 101px;">
                                        <h3>Donate us</h3>
                                        <p>Bank and NEFT Details will come here</p>
                                        <form class="form" action="#" method="post">
                                            <div class="row">
                                                <!-- <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <input class="form-control form-group" name="cf_name" required="" type="text" placeholder="Full name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <input class="form-control form-group" name="email" required="" type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <input class="form-control form-group" name="mobile" required="" type="text" placeholder="Phone No.">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control form-group" name="message" required="" placeholder="Write Your Message Here....."></textarea>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <div class="button">
                                                            <button class="contact_form_submit btn btn-style1" name="submit" type="submit" value="submit">Donate</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="right_conatct_social_icon d-flex align-items-end">
                                    <!-- <div class="socil_item_inner d-flex">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_sec">
                            <h4>Address</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:+912223860623">+91 22 2386 0623</a>, <a href="tel:+912223809836">+91 22 2380 9836</a></span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:care@khadayatasamaj.in">care@khadayatasamaj.in</a></span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fa fa-map-marker"></i>
                                <span>Chandulal T Parikh Shree Khadayta Bhuvan, 213 Rajaram Mohan Roy Marg, Mumbai - 400004</span>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4 style="text-align:center">Find Us on Google Map</h4>
                        <div class="map_bind">
                            <iframe width='100%' height='450' id='mapcanvas'
                                src='https://maps.google.com/maps?q=Chandulal T Parikh, Shree Khadayta Bhuvan, 213 Rajaram Mohan Roy Marg, Mumbai - 400004&t=&z=10&ie=UTF8&iwloc=&output=embed'
                                frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
                            </iframe>

                            <style>
                                .map_bind {
                                    position: relative;
                                    text-align: right;
                                    height: 510px;
                                    width: 100%;
                                    margin-top: 20px;
                                    border-radius: 20px;
                                    overflow: hidden;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


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