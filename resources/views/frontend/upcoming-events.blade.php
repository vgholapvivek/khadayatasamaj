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

    @include('frontend.includes.shared.sponsers-banner')

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

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')

@endsection