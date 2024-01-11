<div id="member-scroll-container">

            @if(isset($achievements) && $achievements->isNotEmpty())
               @foreach($achievements as $achievement)
                    <div class="recent-samaj-details">
                        <h5>{{$achievement->title}}</h5>
                        <p>Date - {{date('d-m-y',strtotime($achievement->date))}}</p>
                        <p>Details of Post - {{$achievement->description}}</p>
                        <p>Status - {{@$achievement->adstatus->name}}</p>
                        <p><b>Photos -</b></p>
                    </div>
                    @if(@$achievement->images)
                        <div class="achiv-free1">
                            @foreach(@$achievement->images as $image)
                                <img src="{{$image->image}}" height="50px;" width="50px;">
                            @endforeach    
                        </div>
                    @endif    
                    <div class="achiv-free">
                        
                            {{-- <a href="#" class="btn btn-style05">Edit Post</a> --}}
                            
                            <form method="POST" action="{{ url('member/delete-achievements' . '/' . $achievement->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit"  class="btn btn-style05" title="Delete Achievement" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete Post</button>
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

