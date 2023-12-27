@extends('frontend.layouts.master')
@section('content')
@section('title', 'past-events')

    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/about/about-banner.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/about/about-us-mobile-banner.webp')}}" class="img-fluid" alt="banner">
        </div>
    </section>
    <!--home page slider start-->

    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="borad-member-nav">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="justify-content: flex-start;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-2014"
                                    type="button" role="tab" aria-selected="true">2022</button>
                            </li>
                            <li class="nav-item" role="presentation" style="    margin-left: 20px;">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2015"
                                    type="button" role="tab" aria-selected="false">2023</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2016"
                                    type="button" role="tab" aria-selected="false">2016</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2017"
                                    type="button" role="tab" aria-selected="false">2017</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2018"
                                    type="button" role="tab" aria-selected="false">2018</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2019"
                                    type="button" role="tab" aria-selected="false">2019</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2020"
                                    type="button" role="tab" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2021"
                                    type="button" role="tab" aria-selected="false">2021</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2022"
                                    type="button" role="tab" aria-selected="false">2022</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2023"
                                    type="button" role="tab" aria-selected="false">2023</button>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2014" role="tabpanel">
                                <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Kotyarka Utsav - 2022</h1>
                                                <p><b>Venue :</b> Shree Khadayta Bhuvan </p>
                                                <p><b>Details:</b> Prarthana Samaj, Charniroad, Mumbai-4</p>
                                                <p><b>Date :</b> 05/11/2022</p>
                                                <p><b>Total People in Event :</b> 109</p>
                                                <p><b>VIP Guest names :</b> Shri PareshBhai Dineshchanra Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/pareshbhai.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/pareshbhai2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Walk & Talk - 2022</h1>
                                                <p><b>Venue :</b> Places of South Mumbai</p>
                                                <p><b>Details:</b>Walk & Talk on Places of Mumbai connected with Freedome Struggle, Lokmanya Tilak SDtatue August Karnit Maidan Mani Bhavan etc.</p>
                                                <p><b>Date :</b> 12/11/2022</p>
                                                <p><b>Total People in Event :</b> 39</p>
                                                <p><b>Convenor :</b> Shri Yogesh K Shah & Shri Premal K Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/walk-and-talk.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Kotyarka Utsav - 2022</h1>
                                                <p><b>Venue :</b> Shree Khadayta Bhuvan </p>
                                                <p><b>Details:</b> Prarthana Samaj, Charniroad, Mumbai-4</p>
                                                <p><b>Date :</b> 05/11/2022</p>
                                                <p><b>Total People in Event :</b> 109</p>
                                                <p><b>VIP Guest names :</b> Shri PareshBhai Dineshchanra Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/pareshbhai.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/pareshbhai2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Walk & Talk - 2022</h1>
                                                <p><b>Venue :</b> Places of South Mumbai</p>
                                                <p><b>Details:</b>Walk & Talk on Places of Mumbai connected with Freedome Struggle, Lokmanya Tilak SDtatue August Karnit Maidan Mani Bhavan etc.</p>
                                                <p><b>Date :</b> 12/11/2022</p>
                                                <p><b>Total People in Event :</b> 39</p>
                                                <p><b>Convenor :</b>  Shri Yogesh K Shah & Shri Premal K Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/walk-and-talk.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--past EVENTS 2023 -->
                            <div class="tab-pane fade" id="pills-2015" role="tabpanel">
                                <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Astvinayak Yatra - 2023</h1>
                                                <p><b>Venue :</b> Astvinayak Temple</p>
                                                <p><b>Details:</b> Astvinayak Temple Tour</p>
                                                <p><b>Date :</b> 19/01/2023 to 21/01/2023</p>
                                                <p><b>Total People in Event :</b> 111</p>
                                                <p><b>Convenor :</b>  Shri PareshBhai Dineshchanra Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/ast-1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/ast-2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Khadayata Cricket Tournament - 2023</h1>
                                                <p><b>Venue :</b> Kaveerni Ground</p>
                                                <p><b>Details:</b> Link road Borivali West (Mumbai)</p>
                                                <p><b>Date :</b> 24/02/2023 to 25/02/2023</p>
                                                <p><b>Total People in Event :</b> 6 Teams</p>
                                                <p><b>VIP Guest names :</b> Shri Naveenchandr Manilal Mehta</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/cricket1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/cricket2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Astvinayak Yatra - 2023</h1>
                                                <p><b>Venue :</b> Astvinayak Temple</p>
                                                <p><b>Details:</b> Astvinayak Temple Tour</p>
                                                <p><b>Date :</b> 19/01/2023 to 21/01/2023</p>
                                                <p><b>Total People in Event :</b> 111</p>
                                                <p><b>Convenor :</b>  Shri PareshBhai Dineshchanra Shah</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/ast-1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/ast-2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Khadayata Cricket Tournament - 2023</h1>
                                                <p><b>Venue :</b> Kaveerni Ground</p>
                                                <p><b>Details:</b> Link road Borivali West (Mumbai)</p>
                                                <p><b>Date :</b> 24/02/2023 to 25/02/2023</p>
                                                <p><b>Total People in Event :</b> 6 Teams</p>
                                                <p><b>VIP Guest names :</b> Shri Naveenchandr Manilal Mehta</p> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/cricket1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/cricket2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-2016" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2017" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2018" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2019" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2020" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2021" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2022" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2023" role="tabpanel">
                            <div class="trending-products owl-carousel owl-theme">
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event1.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="col-md-12">
                                            <div class="past-events-details">
                                                <h1>Next Event Title - 2018</h1>
                                                <p><b>Venue :</b> Venue detail will Came</p>
                                                <p><b>Details:</b> address & event details descriptions</p>
                                                <p><b>Total People in Event :</b> </p>
                                                <p><b>VIP Guest names :</b> </p>
                                                <p>Name & detail will come here</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="past-events-photo">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="past-events-photo2">
                                                        <img src="{{asset('frontend/images/events/past-event2.webp')}}" class="img-fluid" alt="past-event">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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