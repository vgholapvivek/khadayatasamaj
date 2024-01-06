<div id="member-scroll-container">
    @if(isset($connections))
        @foreach($connections as $connection)
            <div class="recent-samaj-details">
                @if($connection->sender_id != @Auth::guard('member')->user()->id)
                    <h5>{{@$connection->sender->firstName}} {{@$connection->sender->lastName}}</h5>
                    <p>Sex -{{@$connection->sender->gender}}</p>
                    <p>Age - {{\Carbon\Carbon::parse(@$connection->receiver->dob)->age;}}</p>
                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                    <p><b><u>Mobile No - {{@$connection->sender->whatsappNo}}</u></b></p>
                @else
                    <h5>{{@$connection->receiver->firstName}} {{@$connection->receiver->lastName}}</h5>
                    <p>Sex -{{@$connection->receiver->gender}}</p>
                    <p>Age - {{\Carbon\Carbon::parse(@$connection->receiver->dob)->age;}}</p>
                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                    <p><b><u>Mobile No - {{@$connection->receiver->whatsappNo}}</u></b></p>
                @endif    
            </div>
        @endforeach
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

