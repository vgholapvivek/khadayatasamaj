<div id="member-guest-scroll-container">
    @if(isset($guestConnections) && $guestConnections->isNotEmpty())
        @foreach($guestConnections as $guestConnection)
            <div class="recent-samaj-details">
                @if($guestConnection->sender_id != @Auth::guard('member')->user()->id)
                    <h5>{{@$guestConnection->sender->firstName}} {{@$guestConnection->sender->lastName}}</h5>
                    <p>Sex -{{@$guestConnection->sender->gender}}</p>
                    <p>Age - {{\Carbon\Carbon::parse(@$guestConnection->receiver->dob)->age;}}</p>
                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                    <p><b><u>Mobile No - {{@$guestConnection->sender->whatsappNo}}</u></b></p>
                @else
                    <h5>{{@$guestConnection->receiver->firstName}} {{@$guestConnection->receiver->lastName}}</h5>
                    <p>Sex -{{@$guestConnection->receiver->gender}}</p>
                    <p>Age - {{\Carbon\Carbon::parse(@$guestConnection->receiver->dob)->age;}}</p>
                    {{-- <p>Details of Post. Would like ot connect for Discussing more om My and your Business</p> --}}
                    <p><b><u>Mobile No - {{@$guestConnection->receiver->whatsappNo}}</u></b></p>
                @endif    
            </div>
        @endforeach
    @endif   
</div> 

@section('scriptss')
    <script>
        document.getElementById('member-guest-scroll-container').addEventListener('scroll', function () {
            if (this.scrollTop + this.clientHeight >= this.scrollHeight-3) {
                Livewire.emit('loaded-scroll');
            }
        });

        Livewire.on('loaded-scroll', function () {
            @this.loadMore();
        });
    </script>
@endsection
