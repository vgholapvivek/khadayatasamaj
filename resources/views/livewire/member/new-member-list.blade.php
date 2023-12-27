<!-- khadayata-Samaj new member section start -->
<div class="col-md-6">
    <div class="samaj-name">
        <h2>Welcome Our New members</h2>
    </div>
    @if(isset($members) && $members->isNotEmpty())
       @foreach($members as $member)
            <div class="samaj-updates">
                <div class="col-md-2">
                    <div class="samaj-members1">
                        <img src="{{asset($member->memberPhoto)}}" class="img-fluid" alt="{{$member->firstName}}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="samaj-members2">
                        <h4>{{$member->firstName}} {{$member->lastName}}</h4>
                        <p>{{$member->state}}</p>
                </div>
            </div>
                <div class="col-md-3">
                    <div class="samaj-members3">
                        <a href="{{@Auth::guard('member')->user() ? url('/members-list/'.base64_encode($member->id)) : url('login')}}" class="btn btn-style1">Know More</a>
                    </div>
                </div>
            </div>
       @endforeach 
    @endif
</div>
<!-- khadayata-Samaj new member section end -->