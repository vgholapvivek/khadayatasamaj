@extends('frontend.layouts.master')
@section('content')
@section('title', 'register')
<style>
    label {
    font-weight: 600;
    color: #000;
    }
    .box8{
    box-shadow: 0px 0px 5px 1px #999;
    padding: 55px 55px;
    } 
    .mx-t3{
    margin-top: -3rem;
    }
</style>
			    <!-- banner area 1 -->
                <section class="khadayat-samaj-sponser animate fadeInLeft one">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad1.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner1.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    <!-- Membership Samaj section  -->
    <section class="samaj-updates-section membership-register-section animate fadeInDown two">
        <div class="wrapper">
            <div class="container mt-4 box8">
               
                @livewire('member-registration')
                

				<div class="register-tabl"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container table-responsive"> 
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">3</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">4</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">5</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">6</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">7</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">8</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">9</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container table-responsive"> 
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">3</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">4</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">5</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">6</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">7</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">8</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">9</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                    </tbody>
                                </table>
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
@section('scripts')
	
@endsection