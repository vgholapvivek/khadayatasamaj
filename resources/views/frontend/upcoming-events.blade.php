@extends('frontend.layouts.master')
@section('content')
@section('title', 'upcoming-events')
<!--home page slider start-->
<section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/upcoming-event.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/upcoming-event.webp')}}" class="img-fluid" alt="banner">
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

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="upcoming-events-details">
                        <h1>Vietnam Tour - 2023</h1>
                        <p><b>Venue :</b> Vietnam</p>
                        <p><b>Details:</b> 10 days Tours in May-2023</p>
                        <!-- <p><b>Total People in Event :</b> </p> -->
                        <!-- <p><b>VIP Guest names :</b> </p>  -->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="past-events-photo">
                                <img src="{{asset('frontend/images/events/vietnam1.webp')}}" class="img-fluid" alt="Upcoming-event">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="past-events-photo2">
                                <img src="{{asset('frontend/images/events/vietnam2.webp')}}" class="img-fluid" alt="Upcoming-event">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="upcoming-events-details">

                        <h1>Rules & Terms</h1>
                            <ul>
                                <li>Per member can register 6 tickets max-only for family members</li>
                                <li>Member has to present the ticket no at the event</li>
                                <li>Member cant sell ticket to other member</li>
                                <li>Member has to reach venue before 10 min </li>
                                <li>Other Terms as per board </li>
                            </ul>
                        </div> 
                    </div>

                    <div class="col-md-6">
                    <div class="upcoming-events-details">
                        <h1>Offline Event - 2023</h1>
                        <p><b>Venue :</b> XXXX</p>
                        <p><b>Details:</b> Detail will come here</p>
                        <!-- <p><b>Total People in Event :</b> </p> -->
                        <!-- <p><b>VIP Guest names :</b> </p>  -->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offline-photo" style="    padding: 72px; border: 1px solid; background-color: #fff;"></div>
                        </div>
                        <div class="col-md-6">
                        <div class="offline-photo" style="    padding: 72px; border: 1px solid; background-color: #fff;"></div>

                        </div>
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="upcoming-events-details">
                            <h1>Rules & Terms</h1>
                            <ul>
                                <li>Per member can register 6 tickets max-only for family members</li>
                                <li>Member has to present the ticket no at the event</li>
                                <li>Member cant sell ticket to other member</li>
                                <li>Member has to reach venue before 10 min </li>
                                <li>Other Terms as per board </li>
                            </ul>
                        </div> 
                    </div>
        
                    <!-- <div class="col-md-6">
                        <div class="trending-products2 owl-carousel owl-theme">
                            <div class="items">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="past-events-photo">
                                            <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="samaj-upcoming">
                            <a href="upcoming-events-booking.php" class="btn btn-style1">MEMBERS REGISTER NOW</a>
                        </div>
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