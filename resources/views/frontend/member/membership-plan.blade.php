@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')

    @include('frontend.includes.shared.sponsers-banner')

    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="member-plan-details">
                        <h6>Master Member – {{ @$memberDetails->parent->firstName ? $memberDetails->parent->firstName . ' ' .  $memberDetails->parent->firstName :  @$memberDetails->firstName . ' ' . @$memberDetails->lastName}}</h6>
                        <h6>Member Since – {{@$memberDetails->parent->firstName ? date('d/m/Y', strtotime(@$memberDetails->parent->created_at)) : date('d/m/Y', strtotime($memberDetails->created_at))}}</h6>
                        <h6>Payment Received – 1000 INR for (Life time membership)</h6>
                        <h6>Relation to Member – {{@$memberDetails->parent->firstName ? @$memberDetails->parent->member_relation : 'Self'}}</h6>
                    </div>
                    <div class="member-det-log">
                        <h2>+ Add Family Member</h2>
                    </div>
                    <div class="mess-radio-box">
                        @if (session()->has('message'))
                        <div class="alert alert-success" style="text-align: center;">
                           {{ session('message') }}
                        </div>
                       @endif 	
                        @livewire('family-member-registration')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection