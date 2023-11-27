@extends('frontend.layouts.master')
@section('content')
@section('title', 'home')
    <!--home page slider start-->
    <section class="slider desk-banner">
        <div class="home-slider owl-carousel owl-theme">
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/banner1.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                    <!-- <div class="h-s-content slide-c-l">
                        <span>Khadayata Samaj</span>
                        <h1>Khadayata Samaj<br>Khadayata Samaj</h1>
                        <a href="#" class="btn btn-style1">Know More</a>
                    </div> -->
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/banner2.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/banner3.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/banner4.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
        </div>
    </section>

    <!-- mobile version banner  -->
    <section class="slider mob-banner">
        <div class="home-slider owl-carousel owl-theme">
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/home-mob-01.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/home-mob-02.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/home-mob-03.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
            <div class="items">
                <div class="img-back">
                    <img src="{{asset('frontend/images/home-mob-04.webp')}}" class="img-fluid" alt="Khadayata Samaj">
                </div>
            </div>
        </div>
    </section>
    <!--home page slider start-->

    <section class="khadayat-samaj-sponser animate fadeInLeft one">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad1.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner1.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    <!-- khadayata-Samaj member section  -->
    <section class="samaj-updates-section animate fadeInUp two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="samaj-updates-border">
                        <div class="samaj-name">
                            <h2>Khadayata Samaj Update</h2>
                        </div>
                        <div class="samaj-updates">
                            <div class="col-md-2">
                                <div class="samaj-members1">
                                    <img src="{{asset('frontend/images/events/vietnam1.webp')}}" class="img-fluid" alt="blood">
                                </div>
                            </div>
                           <div class="col-md-7">
                                <div class="samaj-members2">
                                    <p><b>Vietnam Tour</b></p>
                            </div>
                           </div>
                            <div class="col-md-3">
                                <div class="samaj-members3">
                                    <a href="#" class="btn btn-style1">Know More</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="samaj-updates">
                            <div class="col-md-2">
                                <div class="samaj-members1">
                                    <img src="{{asset('frontend/images/events/walk-and-talk.webp')}}" class="img-fluid" alt="cricket">
                                </div>
                            </div>
                           <div class="col-md-7">
                                <div class="samaj-members2">
                                    <p><b>Annual Function</b></p>
                            </div>
                           </div>
                           <div class="col-md-3">
                                <div class="samaj-members3">
                                    <a href="#" class="btn btn-style1">Know More</a>
                                </div>
                           </div>
                        </div>
    
                        <div class="samaj-updates">
                            <div class="col-md-2">
                                <div class="samaj-members1">
                                    <img src="{{asset('frontend/images/shark-tank.webp')}}" class="img-fluid" alt="karjat">
                                </div>
                            </div>
                           <div class="col-md-7">
                                <div class="samaj-members2">
                                    <p><b>Shark Tank</b></p>
                            </div>
                           </div>
                            <div class="col-md-3">
                                <div class="samaj-members3">
                                    <a href="#" class="btn btn-style1">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="samaj-name">
                        <h2>Welcome Our New members</h2>
                    </div>
                    <div class="samaj-updates">
                        <div class="col-md-2">
                            <div class="samaj-members1">
                                <img src="{{asset('frontend/images/rahul-vatat.webp')}}" class="img-fluid" alt="rahul-vatat">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="samaj-members2">
                                <h4>New Member Name 01</h4>
                                <p>Member Details will come here</p>
                        </div>
                       </div>
                        <div class="col-md-3">
                            <div class="samaj-members3">
                                <a href="#" class="btn btn-style1">Know More</a>
                            </div>
                        </div>
                    </div>

                    <div class="samaj-updates">
                        <div class="col-md-2">
                            <div class="samaj-members1">
                                <img src="{{asset('frontend/images/rahul-vatat.webp')}}" class="img-fluid" alt="rahul-vatat">
                            </div>
                        </div>
                       <div class="col-md-7">
                            <div class="samaj-members2">
                                <h4>New Member Name 02</h4>
                                <p>Member Details will come here</p>
                        </div>
                       </div>
                       <div class="col-md-3">
                            <div class="samaj-members3">
                                <a href="#" class="btn btn-style1">Know More</a>
                            </div>
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

    <!-- Events Relief Foundation -->
    <section class="events-relief-foundation-section animate fadeInLeft four">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="samaj-event">
                        <h2>Walk & Talk</h2>
                    </div>
                    <div class="samaj-event-photo">
                        <img class="img-fluid" src="{{asset('frontend/images/walk-event.webp')}}" alt="event">
                        <p> </p>
                        <a href="past-events.php" class="btn btn-style1">Know More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="samaj-event">
                        <h2>Khadayata Cricket Tournament</h2>
                    </div>
                    <div class="samaj-event-photo">
                        <img class="img-fluid" src="{{asset('frontend/images/cricket-event.webp')}}" alt="foundtaion">
                        <p></p>
                        <a href="past-events.php" class="btn btn-style1">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Banner Area 3 - Sponser Banner -->
    <section class="khadayat-samaj-sponser animate fadeInRight four">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad3.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner3.webp')}}" class="img-fluid" alt="banner">
        </div>
    </section>

    <!-- Members Sharing Experience for Khadayata Samaj -->
    <section class="events-relief-foundation-section animate fadeInDown five">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Members Sharing Experience for Khadayata Samaj</h2>
                    </div>
                    <div class="home-blog owl-carousel owl-theme">
                        <div class="items">
                            <div class="col-md-12">
                                <div class="samaj-updates">
                                    <div class="col-md-6">
                                        <div class="samaj-member1">
                                            <img src="{{asset('frontend/images/testimonials.webp')}}" class="img-fluid" alt="testimonial">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="samaj-member2">
                                            <img src="{{asset('frontend/images/quotation-marks.webp')}}" class="img-fluid" alt="testimonial">
                                            <p>Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here..</p>
                                            <h4>Person Name</h4>
                                            <p>Designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="col-md-12">
                                <div class="samaj-updates">
                                    <div class="col-md-6">
                                        <div class="samaj-member1">
                                            <img src="{{asset('frontend/images/testimonials.webp')}}" class="img-fluid" alt="testimonial">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="samaj-member2">
                                            <img src="{{asset('frontend/images/quotation-marks.webp')}}" class="img-fluid" alt="testimonial">
                                            <p>Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here..</p>
                                            <h4>Person Name</h4>
                                            <p>Designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="col-md-12">
                                <div class="samaj-updates">
                                    <div class="col-md-6">
                                        <div class="samaj-member1">
                                            <img src="{{asset('frontend/images/testimonials.webp')}}" class="img-fluid" alt="testimonial">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="samaj-member2">
                                            <img src="{{asset('frontend/images/quotation-marks.webp')}}" class="img-fluid" alt="testimonial">
                                            <p>Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here..</p>
                                            <h4>Person Name</h4>
                                            <p>Designation</p>
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

    <!-- (Jobs posting Banner4)  -->
    <section class="samaj-updates-section animate fadeInUp six">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="samaj-updates-border">
                        <div class="samaj-job">
                            <h2>Jobs <b></b></h2>
                        </div>
                        <div class="col-md-12">
                            <div class="samaj-job-ach">
                                <div class="samaj-achivement achiv-1">
                                    <div class="samaj-member1">
                                        <img src="{{asset('frontend/images/job1.webp')}}" class="img-fluid" alt="job1">
                                    </div>
                                    <div class="samaj-member2">
                                        <h4>Job</h4>
                                        <p>Content detail  dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="samaj-a">
                                    <a href="#" class="btn btn-style1">Load  All job Postings</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="samaj-updates-border">
                        <div class="samaj-job">
                            <h2>Requirements <b></b></h2>
                        </div>
                        <div class="col-md-12">
                            <div class="samaj-job-ach">
                                <div class="samaj-achivement achiv-1">
                                    <div class="samaj-member1">
                                        <img src="{{asset('frontend/images/requirement.webp')}}" class="img-fluid" alt="job1">
                                    </div>
                                    <div class="samaj-member2">
                                        <h4>Requirements</h4>
                                        <p>Content detail  dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="samaj-a">
                                    <a href="#" class="btn btn-style1">Load All Requirements Postings</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="samaj-job">
                        <h2>Achivement by Members <b></b></h2>
                    </div>
                    <div class="col-md-12">
                        <div class="samaj-job-ach">
                            <div class="samaj-achivement achiv-1">
                                <div class="samaj-member1">
                                    <img src="{{asset('frontend/images/acheivement.webp')}}" class="img-fluid" alt="achivement">
                                </div>
                                <div class="samaj-member2">
                                    <h4>Achivements</h4>
                                    <p>Content detail  dolor sit amet, consectetur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="samaj-b">
                                <a href="#" class="btn btn-style1">Load All Achivement</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Banner Donate Now -->
    <section class="khadayat-donate-join animate fadeInLeft seven">
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
    <section class="khadayat-samaj-sponser animate fadeInRight eight">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad6.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner4.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    
    <!-- footer start -->
    @endsection