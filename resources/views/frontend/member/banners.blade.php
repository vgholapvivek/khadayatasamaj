@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

   <!-- History of Khadayata Samaj section  -->
   <section class="samaj-updates-section animate fadeInDown two">
      <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="recent-details">
                    <h4>Select Banner Position</h4>
                </div>
                <br>
                @livewire('member-upload-banner')
            </div>

            {{-- <div class="col-md-5">
                <div class="recent-update-ben4" style="background: aliceblue;">
                    <div class="recent-details">
                        <h4>Selected Banners</h4>
                    </div>
                    <div class="recent-samaj-details">
                        <h5>Top Banner</h5>
                        <p>Monthly - 5000</p>
                        <p>Start Date - 02/02/2023</p>
                        <p>End Date - 02/03/2023</p>
                    </div>
                    
                    <div class="recent-samaj-details">
                        <h5 style="margin-top: 0px;">Middle Banner</h5>
                        <p>Monthly - 5000</p>
                        <p>Start Date - 02/02/2023</p>
                        <p>End Date - 02/03/2023</p>
                    </div>

                    <div class="recent-samaj-details">
                        <h5 style="margin-top: 0px;">Bottom Banner</h5>
                        <p>Monthly - 5000</p>
                        <p>Start Date - 02/02/2023</p>
                        <p>End Date - 02/03/2023</p>
                    </div>

                    <div class="recent-samaj-details"> 
                        <p>Total - 15,000</p>
                    </div>

                    <div class="recent-samaj-details">
                        <input type="checkbox" class="d-inline" id="chb" required="">
                        <label for="chb" class="form-check-label">
                            &nbsp;I accept all terms and conditions.
                        </label><br><br>
                        <a href="#" class="btn btn-style05">Pay Now</a>
                    </div>
                </div><br>
            </div> --}}

        </div>
      </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection