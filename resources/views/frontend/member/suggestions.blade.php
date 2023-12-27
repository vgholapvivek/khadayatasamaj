@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

    <!-- Suggestions of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                @if (\Session::has('error'))
                    <div class="alert alert-danger" style="text-align: center">
                        {{ \Session::get('error') }}
                    </div>
                @endif
            
                @if (\Session::has('success'))
                    <div class="alert alert-success" style="text-align: center">
                        {{ \Session::get('success') }}
                    </div>
                @endif
                <div class="col-md-12">
                    <form method="post" action="/member/submit-suggestion">
                        @csrf
                        <div class="suggestion-section">
                            <h4>Please give your suggestions for</h4>
                            <div class="marital-form">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" checked value="Trust">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Trust 
                                    </label>
                                </div>
                                <div class="form-check check2">
                                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="Donation">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Donation
                                    </label>
                                </div>
                                <div class="form-check check2">
                                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault3" value="Events">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Events
                                    </label>
                                </div>
                                <div class="form-check check2">
                                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault4" value="Website">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Website
                                    </label>
                                </div>
                                <div class="form-check check2">
                                    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault5" value="Committee">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Committee
                                    </label>
                                </div>
                            </div>
                            <textarea name="message" id=""  rows="8" placeholder="Type your message here............" required></textarea>
                            <div style="text-align: end;">
                                <button type="submit" value="submit" class="btn2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection