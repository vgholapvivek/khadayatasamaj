@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')


    @include('frontend.includes.shared.sponsers-banner')

    <!-- History of Khadayata Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
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
            <div class="row">
            <div class="col-md-12">
                    <div class="borad-member-nav">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-2014"
                                    type="button" role="tab" aria-selected="true">Achievements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2015"
                                    type="button" role="tab" aria-selected="false">Jobs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2016"
                                    type="button" role="tab" aria-selected="false">Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-2017"
                                    type="button" role="tab" aria-selected="false">Matrimonial</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Achievements -->
                            <div class="tab-pane fade show active" id="pills-2014" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mess-radio-box">
                                            <div class="achievementForm">
                                                @include('frontend.member.achievements.create')
                                            </div>

                                            <div class="achiv-rules">
                                                <h4>Rules and Terms </h4>
                                                <ul>
                                                    <li>Banner Position will come up on random basis and appear as per rotaion on browser</li>
                                                    <li>This Payment is not refundable</li>
                                                    <li>Banner will be first moderated approval by TRUST and as confirmed - it will start display on website</li>
                                                    <li>If banners are not approval Admin will call and discuss the banner content and request edits.</li>
                                                    <li>Free Post will have just 4 photos and No Banner post or position</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recent-update-ben3">
                                            <div class="recent-details">
                                                <h4>Achievements (Free)</h4>
                                            </div>
                                            @if(isset($freeAchievement))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$freeAchievement->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($freeAchievement->date))}}</p>
                                                    <p>Details of Post - {{$freeAchievement->description}}</p>
                                                    <p>Status - {{@$freeAchievement->adstatus->name}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$freeAchievement->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$freeAchievement->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        <form method="POST" action="{{ url('member/delete-achievement' . '/' . $freeAchievement->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Achievement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/achievements/{{base64_encode(0)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else
                                             <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif
                                        </div> 
                                        <br>
                                        <div class="recent-update-ben4">
                                            <div class="recent-details">
                                                <h4>Achievements (Paid)</h4>
                                            </div>
                                            @if(isset($paidAchievement))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$paidAchievement->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($paidAchievement->date))}}</p>
                                                    <p>Details of Post - {{$paidAchievement->description}}</p>
                                                    <p>Status - {{@$paidAchievement->adstatus->name}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$paidAchievement->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$paidAchievement->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                                                        
                                                        <form method="POST" action="{{ url('member/delete-achievement' . '/' . $paidAchievement->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Achievement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/achievements/{{base64_encode(1)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else 
                                               <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <!-- Jobs section -->
                            <div class="tab-pane fade" id="pills-2015" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mess-radio-box">
                                            <div class="jobForm">
                                                @include('frontend.member.jobs.create')
                                            </div>

                                            <div class="achiv-rules">
                                                <h4>Rules and Terms </h4>
                                                <ul>
                                                    <li>Banner Position will come up on random basis and might appear as per rotation on browser</li>
                                                    <li>This Payment is not refundable</li>
                                                    <li>Banner will be first moderated approval by TRUST and as confirmed - it will start display on website</li>
                                                    <li>If banner are not approval Admin will call and discuss the banner content and request edits.</li>
                                                    <li>Paid Job will appear for 30 Days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recent-update-ben5">
                                            <div class="recent-details">
                                                <h4>Jobs (Free)</h4>
                                            </div>

                                            @if(isset($freeJob))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$freeJob->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($freeJob->date))}}</p>
                                                    <p>Details of Post - {{$freeJob->description}}</p>
                                                    <p>Status - {{@$freeJob->adstatus->name}}</p>
                                                </div>                                               
                                                <div class="achiv-free">
                                                        <form method="POST" action="{{ url('member/delete-job' . '/' . $freeJob->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/jobs/{{base64_encode(0)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else
                                             <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif
                                        </div><br>

                                        <div class="recent-update-ben6">
                                            <div class="recent-details">
                                                <h4>Jobs (Paid)</h4>
                                            </div>

                                            @if(isset($paidJob))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$paidJob->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($paidJob->date))}}</p>
                                                    <p>Details of Post - {{$paidJob->description}}</p>
                                                    <p>Status - {{@$paidJob->adstatus->name}}</p>
                                                </div>                                               
                                                <div class="achiv-free">
                                                        <form method="POST" action="{{ url('member/delete-job' . '/' . $paidJob->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/jobs/{{base64_encode(1)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else
                                             <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif
                                        </div><br>
                                    </div>
                                </div>
                            </div>

                            <!-- Requirement section  -->
                            <div class="tab-pane fade" id="pills-2016" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mess-radio-box">
                                            <div class="requirementForm">
                                                @include('frontend.member.requirements.create')
                                            </div>

                                            <div class="achiv-rules">
                                                <h4>Rules and Terms </h4>
                                                <ul>
                                                    <li>Banner Position will come up on random basis and might appear as per rotation on browser</li>
                                                    <li>This Payment is not refundable</li>
                                                    <li>Banner will be first moderated approval by TRUST and as confirmed - it will start display on website</li>
                                                    <li>If banner are not approval Admin will call and discuss the banner content and request edits.</li>
                                                    <li>Paid requirement listing will appear for 30 Days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recent-update-ben7">
                                            <div class="recent-details">
                                                <h4>Requirements (Free)</h4>
                                            </div>
                                            @if(isset($freeRequirement))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$freeRequirement->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($freeRequirement->date))}}</p>
                                                    <p>Details of Post - {{$freeRequirement->description}}</p>
                                                    <p>Status - {{@$freeRequirement->adstatus->name}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$freeRequirement->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$freeRequirement->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                                                        
                                                        <form method="POST" action="{{ url('member/delete-requirement' . '/' . $freeRequirement->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Requirement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/requirements/{{base64_encode(0)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else 
                                               <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif                                            
                                        </div>

                                        <br>

                                        <div class="recent-update-ben8">
                                            <div class="recent-details">
                                                <h4>Requirements (Paid)</h4>
                                            </div>
                                            @if(isset($paidRequirement))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$paidRequirement->title}}</h5>
                                                    <p>Date - {{date('d-m-y',strtotime($paidRequirement->date))}}</p>
                                                    <p>Details of Post - {{$paidRequirement->description}}</p>
                                                    <p>Status - {{@$paidRequirement->adstatus->name}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$paidRequirement->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$paidRequirement->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                                                        
                                                        <form method="POST" action="{{ url('member/delete-requirement' . '/' . $paidRequirement->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Requirement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        <a href="/member/requirements/{{base64_encode(1)}}" class="btn btn-style05">View All</a>
                                                </div>
                                            @else 
                                               <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Matrimonials secion  -->
                            <div class="tab-pane fade" id="pills-2017" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mess-radio-box">
                                            <div class="requirementForm">
                                                @include('frontend.member.matrimonials.create')
                                            </div>

                                            <div class="achiv-rules">
                                                <h4>Rules and Terms </h4>
                                                <ul>
                                                    <li>Banner Position will come up on random basis and might appear as per rotation on browser</li>
                                                    <li>This Payment is not refundable</li>
                                                    <li>Banner will be first moderated approval by TRUST and as confirmed - it will start display on website</li>
                                                    <li>If banner are not approval Admin will call and discuss the banner content and request edits.</li>
                                                    <li>Paid matrimonial requirement listing will appear for 30 days  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="recent-update-ben9">
                                            <div class="recent-details">
                                                <h4>Matrimonials  (Free)</h4>
                                            </div>
                                            @if(isset($freeMatrimonial))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$freeMatrimonial->first_name}} {{$freeMatrimonial->last_name}}</h5>
                                                    <p>Start Date - {{date('d-m-y',strtotime($freeMatrimonial->date))}}</p>
                                                    <p>End Date - {{date('d-m-y',strtotime($freeMatrimonial->date) + 604800)}}</p>
                                                    <p>{{$freeMatrimonial->profile_desc}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$freeMatrimonial->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$freeMatrimonial->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                                                        
                                                        <form method="POST" action="{{ url('member/delete-matrimonial' . '/' . $freeMatrimonial->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Matrimonial" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        {{-- <a href="/member/requirements/{{base64_encode(0)}}" class="btn btn-style05">View All</a> --}}
                                                </div>
                                            @else 
                                               <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif 
                                        </div>
                                        <br>
                                        <div class="recent-update-ben10">
                                            <div class="recent-details">
                                                <h4>Matrimonials (Paid)</h4>
                                            </div>
                                            @if(isset($paidMatrimonial))
                                                <div class="recent-samaj-details">
                                                    <h5>{{$paidMatrimonial->first_name}} {{$paidMatrimonial->last_name}}</h5>
                                                    <p>Start Date - {{date('d-m-y',strtotime($paidMatrimonial->date))}}</p>
                                                    <p>End Date - {{date('d-m-y',strtotime($paidMatrimonial->date) + 604800)}}</p>
                                                    <p>{{$paidMatrimonial->profile_desc}}</p>
                                                    <p><b>Photos -</b></p>
                                                </div>
                                                @if(@$paidMatrimonial->images)
                                                    <div class="achiv-free1">
                                                        @foreach(@$paidMatrimonial->images as $image)
                                                            <img src="{{$image->image}}" height="50px;" width="50px;">
                                                        @endforeach    
                                                    </div>
                                                @endif    
                                                <div class="achiv-free">
                                                        {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                                                        
                                                        <form method="POST" action="{{ url('member/delete-matrimonial' . '/' . $paidMatrimonial->id) }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit"  class="btn btn-style05" title="Delete Matrimonial" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
                                                        </form>
                                                        
                                                        {{-- <a href="/member/requirements/{{base64_encode(0)}}" class="btn btn-style05">View All</a> --}}
                                                </div>
                                            @else 
                                               <h4 style="text-align: center;"> No Data Found </h4>    
                                            @endif 
                                        </div>
                                    </div>
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
@section('scripts')
<script src="{{asset('/frontend/js/message-board.js')}}"></script>
@endsection