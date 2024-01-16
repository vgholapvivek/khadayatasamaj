@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')

    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map-area">
                        <div class="map-details">
                            <div class="contact-info">
                                <div class="contact-details">
                                    @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                    @endif
                                    @if (session()->has('error'))
                                                    <div class="alert alert-error">
                                                        {{ session('message') }}
                                                    </div>
                                    @endif
                                    <h4>Edit Profile</h4> 
                                    @livewire('update-member-profile')   
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