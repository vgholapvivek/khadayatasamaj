@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')


    <!-- banner area 1 -->
    <section class="khadayat-samaj-sponser animate fadeInLeft one">
        <div class="sponser-photo">
            <img src="{{url('frontend/images/ad1.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{url('frontend/images/mobile-banner1.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="recent-update-ben">
                        <div class="recent-details">
                            <h4>Upcoming Events</h4>
                        </div>
                        <div class="recent-samaj-details">
                            <h5>Vietnam Tour - 2023</h5>
                            <p><b>Venue :</b> Vietnam</p>
                            <p><b>Details:</b> 10 days Tours in May-2023</p>
                            <!-- <p>Update details..</p> 
                            <p>Date</p>
                            <p>Content</p>
                            <p>Download PDF</p> -->
                        </div>
                        <div class="update-thumb-photo">
                            <div class="update-thumbnail">
                                <p>Thumbnail Photo Clicking on it will open bigger photo</p>
                            </div>
                            <div class="update-thumbnail2">
                                <p>Thumbnail Photo Clicking on it will open bigger photo</p>
                            </div>
                        </div>

                        <!-- <div class="recent-samaj-details">
                            <h5>Update 02 Title</h5>
                            <p>Update details..</p>
                            <p>Date</p>
                            <p>Content</p>
                            <p>Download PDF</p>
                        </div>
                        <div class="update-thumb-photo">
                            <div class="update-thumbnail">
                                <p>Thumbnail Photo Clicking on it will open bigger photo</p>
                            </div>
                            <div class="update-thumbnail2">
                                <p>Thumbnail Photo Clicking on it will open bigger photo</p>
                            </div>
                        </div> -->
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="recent-update-ben2">
                        <div class="recent-details">
                            <h4>Member Connections</h4>
                        </div>
                        <div class="recent-samaj-details">
                            <h5>Member Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>

                        <div class="recent-samaj-details">
                            <h5>Member Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>

                        <div class="recent-samaj-details">
                            <h5>Member Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="recent-update-ben3">
                        <div class="recent-details">
                            <h4>Guest Connections</h4>
                        </div>
                        <div class="recent-samaj-details">
                            <h5>Guest Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>

                        <div class="recent-samaj-details">
                            <h5>Guest Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>

                        <div class="recent-samaj-details">
                            <h5>Guest Name</h5>
                            <p>Sex - Male/Female</p>
                            <p>Age - XX</p>
                            <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p>
                            <p><b><u>Mobile no - xxxxxxxxxxx</u></b></p>
                        </div>
                    </div><br>
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
                            <img src="{{url('frontend/images/men1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{url('frontend/images/men2.webp')}}" class="img-fluid" alt="matrimonials">
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
                            <img src="{{url('frontend/images/girl.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{url('frontend/images/girl1.webp')}}" class="img-fluid" alt="matrimonials">
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
                                    <img src="{{url('frontend/images/donation.webp')}}" class="img-fluid" alt="donation">
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
                                    <img src="{{url('frontend/images/join.webp')}}" class="img-fluid" alt="Join Us">
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
                                    <img src="{{url('frontend/images/call.webp')}}" class="img-fluid" alt="Call Us">
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
                                    <img src="{{url('frontend/images/whats.webp')}}" class="img-fluid" alt="Whats App Us">
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
            <img src="{{url('frontend/images/ad6.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{url('frontend/images/mobile-banner4.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>
@endsection