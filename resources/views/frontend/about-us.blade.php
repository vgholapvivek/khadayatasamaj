@extends('frontend.layouts.master')
@section('content')
@section('title', 'about-us')
    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/about/history-banner.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/about/history-mob-01.webp')}}" class="img-fluid" alt="banner">
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
                <div class="col-md-12">
                    <div class="hisory-details">
                        <h2>History of Khadayata Samaj</h2>
                        <p>Shri Khadayta Samaj was established in Mumbai on 14th of April 1912 (Sunday 12th Chaitra Vad of Samvat 1968). self She Muljibhai Nathjibhai Kothari, Late. Shy Trikamlal Ranchodlal Desai, Late Shri Mohanlal Purushottamdas Shah (Imperial Dairy), Late Shri Maneklal Purushottamdas Desai (of the Calendar, Vala),  late Shri Ranchodlal Bhogilal Golwala, Late Mr. Babubhai T. Desai and Sr. Shri Bhailalbhai Vrindavandas Kothari (Lawyer) was the chief founder. Today, we all castes are gathered for their ingenuity. </p><br>
                        <p>The objectives a Sri Khadayta Samaj were and are very noble.</p><br>
                        <ul>
                            <li>1.	To plan and endeavor to increase mutual wealth and affection among our brothers and sisters and to remove differences, </li>
                            <li>2.	To try to improve the customs and constitution of different villages and different units of our caste from time to time. </li>
                            <li>3.	To further promote the growth of education, physical / mental / health, business / economic condition of employment HI our caste and to take every measure tor the urrefenent of the caste .</li>
                            <li>4.	Apart from this, the general assembly chooses the objectives, thus the first constitutional organization in the entire caste! Sri ‘Khadayta Samaj’ was started, followed by Khadayata Parishad, Khadayata Kelavani Mandal, Bhuvan Mandal, Youth Organizations, Women’s, Societies, Vedic  Relief Funds, etc in the caste.</li>
                        </ul><br>

                        <p>Many institutions of Madhyastha and Ekdavar came into  existence in 1939 as 25 years - Silver Jubilee of Late Celebrated under the presidency of Manekial Pranjivandas Shah  was Late in 1964 as 50 years golden jubilee. It was celebrated under the presidency of Mr. Xavildas Laxmichand Shah, In the year 1974, 60 years of Mani Utsav was celebrated with Swai Dhirubhai Pranjivandas as the President. </p><br>
                        <p>The year 1986 to 1988 was celebrated as 75 years of Amrit Mohotsav under the presidency of Shri Chandravanad Shantilal Shah. As a result of this the Sri Khadayta Welfare Foundation was formed, the year 2011 to 2012 marked 100 years under the presidency of Shri Btwendrabha Hariwandas Shah. Professional directory late in 1980. Released under the presidency of Shri Rasiklal Chandulal Parikh. Then in the year 2005, Samaj Darshan was released under the presidency of Shri Dilipbhal Mahasukhlal. The basic purpose of Samajdarshan is to bring the brothers and sisters of our caste who are living in Mumbai or suburbs near each other to progress with each other in over time in the year 2022 to 2023. Mrs, Hina Dilip Shah and Mrs Shantagouri Mahasukhlal Shah.</p><br>
                        <p>The website is managed under the chairmanship of Mr. Pareshbhai Dineshchardra Shah, President of Mr. Khadayta Samaj.  It is expected that caste members will make good use of it,</p><br>
                        <p> Shri KhadaytaSama organized various good events for the upliftment of the castes and cooperated with each other (a young brother of the caste) Burt’s prayer to further strengthen such an institution. </p><br>
                        
                    </div>
                    <!-- <div class="hisory-details2">
                        <h2>Unique Quote</h2>
                        <p>Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here.. Details will come here..
                            Details will come here.. Details will come here.. </p>
                    </div> -->
                </div>
                <!-- <div class="col-md-6">
                    <div class="history-samaj-photo">
                        <img src="{{asset('frontend/images/about/khadyata.webp')}}" class="img-fluid" alt="khadyata">
                    </div>
                </div> -->
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