@extends('frontend.layouts.master')
@section('content')
@section('title', 'Register')
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

    @include('frontend.includes.shared.sponsers-banner')

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

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')

@endsection
@section('scripts')
	
@endsection