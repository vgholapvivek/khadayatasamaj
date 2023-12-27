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
                <form action="/member/submit-feedback" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="suggestion-section feed-sec">
                        <h4>Please give your feedback for</h4>
                        <div class="form-feed">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your subject"  required>
                        </div>

                        <textarea name="message" id="message"  rows="8" placeholder="Type your message here............" required></textarea>

                        <div class="form-feed">
                            <label>Upload ScreenShot</label>
                            <input style="background: white;" type="file" id="choose-file" name="image" accept="image/*"  onchange="preview()" />
                            <div id="img-preview" class="feed-pre">                                
                                <img id="frame" src="" width="145px" height="145px" style="max-width: 145px; max-height: 145px;" />
                            </div> 
                        </div>

                        <div class="feed-btns" style="text-align: end;">
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
    
    <script>
       function preview() 
       {
            frame.src=URL.createObjectURL(event.target.files[0]);
       }
    </script>

@endsection