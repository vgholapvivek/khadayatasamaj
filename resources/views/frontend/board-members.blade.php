@extends('frontend.layouts.master')
@section('content')
@section('title', 'Board Members')

    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/about/member-header-banner.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/about/about-us-member-mobile-banner.webp')}}" class="img-fluid" alt="banner">
        </div>
    </section>
    <!--home page slider start-->


    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="members-details">
                                <h2>President</h2>
                                <img src="{{asset('frontend/images/board-member/bd-01.webp')}}" class="img-fluid" alt="member">
                                <p><b>Shri Pareshbhai Dineshchanra Shah</b></p>
                               
                            </div>
                        </div>
                        <div class="col-md-4"></div><br>
                        
                        <div class="col-md-12">
                            <div class="members-details">
                                <h2>Vice president </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-02.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Ashwin K Kothari </b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-03.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Narayan C Sheth</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-04.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Vimal S shah</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="members-details">
                                <h2>Secretary </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-05.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Nainesh shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-06.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Hemant Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-07.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri  Kaushik Shah</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="members-details">
                                <h2>Treasurer </h2>
                                <img src="{{asset('frontend/images/board-member/bd-08.webp')}}" class="img-fluid" alt="member">
                                <p><b>Shri Kamlesh Shah</b></p>
                               
                            </div>
                        </div>
                        <div class="col-md-4"></div>


                        <div class="col-md-12">
                            <div class="members-details">
                                <h2>Trustees </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-09.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Yogesh Ramanlal Shah</b></p>
                                       
                                    </div><br>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-10.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Vasanatlal H Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-11.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Amrish J Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-16.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Shreyas S Shah</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-12">
                            <div class="members-details">
                                <h2>Donor Trustee</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-12.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Bhupendra H Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-13.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Ankur H Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-14.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Navinchandra M Mehta</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-12">
                            <div class="members-details">
                                <h2>Covener</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-15.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Ashwinkumar K Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-16.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Amrish J Shah</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="members-details">
                                <h2>Covener</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-17.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Vimal S Shah</b></p>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="members-details">
                                        <img src="{{asset('frontend/images/board-member/bd-05.webp')}}" class="img-fluid" alt="member">
                                        <p><b>Shri Nainesh Shah</b></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="borad-member-nav">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-2014"
                                    type="button" role="tab" aria-selected="true">2014</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2015"
                                    type="button" role="tab" aria-selected="false">2015</button>
                            </li>
                            <li class="nav-item" role="presentation">
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
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2014" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-2015" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-2016" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2017" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2018" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2019" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2020" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2021" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2022" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-2023" role="tabpanel">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member1.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="members-details">
                                            <img src="{{asset('frontend/images/about/member2.webp')}}" class="img-fluid" alt="member">
                                            <p><b>Shri Member - Vipin Shah</b></p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')

@endsection