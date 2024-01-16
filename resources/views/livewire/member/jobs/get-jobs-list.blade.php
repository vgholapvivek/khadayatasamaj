<div id="member-scroll-container">

    @if(isset($jobs) && $jobs->isNotEmpty())
       @foreach($jobs as $job)
            <div class="recent-samaj-details">
                <h5>{{$job->title}}</h5>
                <p>Date - {{date('d-m-y',strtotime($job->date))}}</p>
                <p>Details of Post - {{$job->description}}</p>
                <p>Status - {{@$job->adstatus->name}}</p>
                {{-- <p><b>Photos -</b></p> --}}
            </div>
             
            <div class="achiv-free">
                
                    {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                    
                    <form method="POST" action="{{ url('member/delete-job' . '/' . $job->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit"  class="btn btn-style05" title="Delete Job" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Job</button>
                    </form>
                    
                    {{-- <a href="/member/achievements/{{base64_encode(1)}}" class="btn btn-style05">View All</a> --}}
            </div>
        @endforeach
    @else
        <h4 style="text-align: center;"> No Data Found </h4>    
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

