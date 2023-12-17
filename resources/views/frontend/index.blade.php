@extends('frontend.layouts.master')
@section('content')
@section('title', 'home')

   @livewire('main-banner-list')

   @include('frontend.includes.shared.sponsers-banner')

    <!-- khadayata-Samaj section start -->
    <section class="samaj-updates-section animate fadeInUp two">
        <div class="container">
            <div class="row">
                <!-- khadayata-Samaj update section start -->
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
                <!-- khadayata-Samaj update section end -->

                <!-- khadayata-Samaj new member section start -->
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
                <!-- khadayata-Samaj new member section end -->
            </div>
        </div>
    </section>
    <!-- khadayata-Samaj section end -->

    @livewire('metrimonial-banner-list')

    <!-- Events section start -->
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
    <!-- Events section end -->

    @livewire('area-three-banner-list')

    <!-- Members Experience section start -->
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
    <!-- Members Experience section end -->

    <!-- jobs requirements and achievements section start  -->
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
                                    <a href="{{Auth::guard('member')->user() ? url('/member/jobs') : url('/member/login')}}" class="btn btn-style1">Load  All job Postings</a>
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
                                    <a href="{{Auth::guard('member')->user() ? url('/member/requirements') : url('/member/login')}}" class="btn btn-style1">Load All Requirements Postings</a>
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
                                <a href="{{Auth::guard('member')->user() ? url('/member/achivements') : url('/member/login')}}" class="btn btn-style1">Load All Achivement</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jobs requirements and achievements section end  -->


    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')
    
    <!-- footer start -->
@endsection