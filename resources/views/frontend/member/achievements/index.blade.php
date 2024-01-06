@extends('frontend.layouts.master')
@section('content')
@section('title', 'Achievements')

    <style>
        /* Apply styles to make the div scrollable */
        #member-scroll-container  {
            height: 600px; /* Set a fixed height for the scrollable area */
            overflow-y: scroll; /* Enable vertical scrolling */
            border: 1px solid #ccc; /* Optional: Add a border for better visibility */
            padding: 10px; /* Optional: Add padding for content inside the div */
        }
    </style>  

    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @livewire('get-achievements-list',['ad_type' => $ad_type])
                    
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection
@section('scripts')
<script>

    $('.freeClass').hide();

    $('input[type=radio][name=type]').change(function() {
        if (this.value == 1) 
        {
            $('.bannerSection').show();
            $('.paidClass').show();
            $('.freeClass').hide();
            
        }else if (this.value == 0) 
        {
            $('.bannerSection').hide();
            $('.paidClass').hide();
            $('.freeClass').show();
            $('#achivBanner').val('');
        }
    });
</script>
@endsection