@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')

    @include('frontend.includes.shared.sponsers-banner')

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

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')
    
@endsection