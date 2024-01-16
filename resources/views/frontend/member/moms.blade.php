@extends('frontend.layouts.master')
@section('content')
<style>
    /* Apply styles to make the div scrollable */
    /* #member-scroll-container ,#member-guest-scroll-container {
           height: 450px; /* Set a fixed height for the scrollable area */
           overflow-y: scroll; /* Enable vertical scrolling */
           border: 1px solid #ccc; /* Optional: Add a border for better visibility */
           padding: 10px; /* Optional: Add padding for content inside the div */
       } */
</style> 
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

   <!-- Suggestions of Khadayata Samaj section  -->
   <section class="samaj-updates-section animate fadeInDown two">
    <div class="invoice-table"> 
        <div class="row">
            <div class="col-md-12">
                <div class="container table-responsive"> 
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Meeting Date</th>
                                <th scope="col">Meeting Details</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @livewire('get-moms-list')  
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
    <script>
       function preview() 
       {
            frame.src=URL.createObjectURL(event.target.files[0]);
       }
    </script>

@endsection