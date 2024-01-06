@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="recent-update-ben">
                        <div class="recent-details">
                            <h4>Upcoming Events</h4>
                        </div>

                        @if(isset($updates) && $updates->isNotEmpty())
                           @foreach($updates as $update)
                                <div class="recent-samaj-details">
                                    <h5>{{$update->name}}</h5>
                                    <p><b>Venue :</b> {{$update->venue}}</p>
                                    <p><b>Details:</b> {{$update->details}}</p>
                                    <!-- <p>Update details..</p> 
                                    <p>Date</p>
                                    <p>Content</p>
                                    <p>Download PDF</p> -->
                                </div>
                                @if(@$update->updateImages)
                                    <div class="update-thumb-photo">
                                        @foreach($update->updateImages as $image)
                                            <div class="update-thumbnail">
                                                <img src="{{asset($image->event_image)}}" height="100px;" width="100px;">
                                            </div>
                                        @endforeach    
                                    </div>
                                @endif    
                            @endforeach
                        @endif    
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="recent-update-ben2">
                        <div class="recent-details">
                            <h4>Member Connections</h4>
                        </div>
                        @if(isset($connections) && $connections->isNotEmpty())
                          @foreach($connections as $connection)
                            <div class="recent-samaj-details">
                                @if($connection->sender_id != @Auth::guard('member')->user()->id)
                                    <h5>{{@$connection->sender->firstName}} {{@$connection->sender->lastName}}</h5>
                                    <p>Sex -{{@$connection->sender->gender}}</p>
                                    <p>Age - {{\Carbon\Carbon::parse($connection->receiver->dob)->age;}}</p>
                                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                                    <p><b><u>Mobile No - {{@$connection->sender->whatsappNo}}</u></b></p>
                                @else
                                    <h5>{{@$connection->receiver->firstName}} {{@$connection->receiver->lastName}}</h5>
                                    <p>Sex -{{@$connection->receiver->gender}}</p>
                                    <p>Age - {{\Carbon\Carbon::parse($connection->receiver->dob)->age;}}</p>
                                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                                    <p><b><u>Mobile No - {{@$connection->receiver->whatsappNo}}</u></b></p>
                                @endif    
                            </div>
                          @endforeach  
                          <a href="/member/connections"> View All </a>
                        @endif
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="recent-update-ben3">
                        <div class="recent-details">
                            <h4>Guest Connections</h4>
                        </div>
                        @if(isset($guestConnections) && $guestConnections->isNotEmpty())
                          @foreach($guestConnections as $guestConnection)
                            <div class="recent-samaj-details">
                                @if($guestConnection->sender_id != @Auth::guard('member')->user()->id)
                                    <h5>{{@$guestConnection->sender->firstName}} {{@$guestConnection->sender->lastName}}</h5>
                                    <p>Sex -{{@$guestConnection->sender->gender}}</p>
                                    <p>Age - {{\Carbon\Carbon::parse($guestConnection->receiver->dob)->age;}}</p>
                                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                                    <p><b><u>Mobile No - {{@$guestConnection->sender->whatsappNo}}</u></b></p>
                                @else
                                    <h5>{{@$guestConnection->receiver->firstName}} {{@$guestConnection->receiver->lastName}}</h5>
                                    <p>Sex -{{@$guestConnection->receiver->gender}}</p>
                                    <p>Age - {{\Carbon\Carbon::parse($guestConnection->receiver->dob)->age;}}</p>
                                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                                    <p><b><u>Mobile No - {{@$guestConnection->receiver->whatsappNo}}</u></b></p>
                                @endif    
                            </div>
                          @endforeach  
                          <a href="/member/connections"> View All </a>
                        @endif                        
                    </div><br>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection