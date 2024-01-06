<div id="member-scroll-container">

    @if(isset($requirements) && $requirements->isNotEmpty())
       @foreach($requirements as $requirement)
            <div class="recent-samaj-details">
                <h5>{{$requirement->title}}</h5>
                <p>Date - {{date('d-m-y',strtotime($requirement->date))}}</p>
                <p>Details of Post - {{$requirement->description}}</p>
                <p>Status - {{@$requirement->adstatus->name}}</p>
                <p><b>Photos -</b></p>
            </div>
            @if(@$requirement->images)
                <div class="achiv-free1">
                    @foreach(@$requirement->images as $image)
                        <img src="{{$image->image}}" height="50px;" width="50px;">
                    @endforeach    
                </div>
            @endif    
            <div class="achiv-free">
                
                    {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                    
                    <form method="POST" action="{{ url('member/delete-job' . '/' . $requirement->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit"  class="btn btn-style05" title="Delete Requirement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Requirement</button>
                    </form>
                    
                    {{-- <a href="/member/achievements/{{base64_encode(1)}}" class="btn btn-style05">View All</a> --}}
            </div>
        @endforeach
    @else
        <h4 style="text-align: center;"> No Posts Found </h4>    
    @endif

</div> 

@section('scripts')
    <script>
        document.getElementById('member-scroll-container').addEventListener('scroll', function () {
            if (this.scrollTop + this.clientHeight >= this.scrollHeight-3) {
                Livewire.emit('scroll-loaded');
            }
        });

        Livewire.on('scroll-loaded', function () {
            @this.loadMore();
        });
    </script>
@endsection

