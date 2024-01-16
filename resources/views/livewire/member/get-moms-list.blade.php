<div id="member-scroll-container">
    @if(isset($moms))
      @foreach($moms as $mom)
        <tr>
          <td>{{date('d/m/Y',strtotime($mom->date))}}</td>
          <td>{{$mom->mom_details}}</td>
          <td>
            @if(isset($mom->file)) 
               <a href="{{$mom->file}}" target="_blank">View/Download<i class="fa fa-file-pdf-o"></i></a>
            @endif
          </td>
        </tr>
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