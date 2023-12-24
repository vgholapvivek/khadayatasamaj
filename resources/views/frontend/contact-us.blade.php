@extends('frontend.layouts.master')
@section('content')
@section('title', 'Contact Us')

    <!--home page slider start-->
    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="/frontend/images/contact.webp" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="/frontend/images/contact.webp" class="img-fluid" alt="banner">
        </div>
    </section>
    <!--home page slider end-->


    @include('frontend.includes.shared.sponsers-banner')

    <section class="contact-us-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_inner">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger" style="text-align: center">
                                {{ \Session::get('error') }}
                            </div>
                        @endif
                    
                        @if (\Session::has('success'))
                            <div class="alert alert-success" style="text-align: center">
                                {{ \Session::get('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact us</h3>
                                        <form class="form" action="submit-contact" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <div class="form-group">
                                                        <input class="form-control form-group" name="name" required="" type="text" placeholder="Full name">
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <div class="button">
                                                            <button class="contact_form_submit btn btn-style1" name="submit" type="submit" value="submit">Submit</button>
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
    
    <section class="map_sec">
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
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   

@endsection