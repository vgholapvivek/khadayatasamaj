@extends('frontend.layouts.master')
@section('content')
<style>
     /* Apply styles to make the div scrollable */
     #member-scroll-container ,#member-guest-scroll-container {
            height: 450px; /* Set a fixed height for the scrollable area */
            overflow-y: scroll; /* Enable vertical scrolling */
            border: 1px solid #ccc; /* Optional: Add a border for better visibility */
            padding: 10px; /* Optional: Add padding for content inside the div */
        }
</style>        
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

    <!-- members connections  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{-- <div class="connec-log">
                        <a href="#" class="btn btn-style05">View All</a>
                    </div> --}}
                    <div class="recent-update-ben10">
                        <div class="recent-details">
                            <h4>Member Connections</h4>
                        </div>
                        
                        @livewire('member-connection-list')

                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    {{-- <div class="connec-log">
                        <a href="#" class="btn btn-style05">View All</a>
                    </div> --}}
                    <div class="recent-update-ben11">
                        <div class="recent-details">
                            <h4>Guest Connections</h4>
                        </div>

                        @livewire('member-guest-connection-list')   

                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection