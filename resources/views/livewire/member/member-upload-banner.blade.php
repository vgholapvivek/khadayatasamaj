<form wire:submit.prevent="submit" method="post" enctype="multipart/form-data">
    <div class="add-photo-achie">
        <h4 style="font-size: 23px;">Top Banner</h4>
    </div>
    <div class="mess-radio-box">
        <div class="form-check main-baner">
            <input class="form-check-input" type="checkbox" wire:model="checkbox1" name="chb_top" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            Monthly Cost 5000 INR
            </label>
        </div>
        <div class="profile-mes4 baner-date">
            <div class="add-pho">
              @foreach($topBannerSlot as $key => $topSlot)
                 <div class="achiv-thumbnail2">
                    <input type="radio" wire:model="topSlot" id="topSlot{{$key}}" name="topSlot" value="{{$topSlot['date']}}" checkeds>
                    <label for="topSlot{{$key}}">{{$topSlot['date']}}</label>
                    <p for="room-1-10-12">Slots: {{$topSlot['slot_available']}}</p>
                 </div>
              @endforeach        
            </div>
        </div>
        <div class="profile-mes4">
            <label for="top_banner">Uplaod:</label>
            <input type="file" id="top_banner" wire:model="top_banner" name="top_banner" {{$required1}}>
        </div>
        <br>
        
        <div class="add-photo-achie">
            <h4 style="font-size: 23px;">Middle Banner</h4>
        </div><br>
        <div class="form-check main-baner">
            <input class="form-check-input" type="checkbox" wire:model="checkbox2" name="chb_middle" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
            Monthly Cost 5000 INR
            </label>
        </div>
        <div class="profile-mes4 baner-date">
            <div class="add-pho">
                @foreach($middleBannerSlot as $key => $middleSlot)
                   <div class="achiv-thumbnail2">
                      <input type="radio" wire:model="middleSlot" id="middleSlot{{$key}}" name="middleSlot" value="{{$middleSlot['date']}}">
                      <label for="middleSlot{{$key}}">{{$middleSlot['date']}}</label>
                      <p for="room-1-10-12">Slots: {{$middleSlot['slot_available']}}</p>
                   </div>
                @endforeach        
            </div>
        </div>
        <div class="profile-mes4">
            <label for="middle_banner">Uplaod:</label>
            <input type="file" id="middle_banner" wire:model="middle_banner" name="middle_banner" {{$required2}}>
        </div>
        <br>

        <div class="add-photo-achie">
            <h4 style="font-size: 23px;">Bottom Banner</h4>
        </div><br>
        <div class="form-check main-baner">
            <input class="form-check-input" type="checkbox" wire:model="checkbox3" name="chb_bottom" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
            Monthly Cost 5000 INR
            </label>
        </div> 
        <div class="profile-mes4 baner-date">
            @foreach($bottomBannerSlot as $key => $bottomSlot)
                   <div class="achiv-thumbnail2">
                      <input type="radio" wire:model="bottomSlot" id="bottomSlot{{$key}}" name="bottomSlot" value="{{$bottomSlot['date']}}">
                      <label for="bottomSlot{{$key}}">{{$bottomSlot['date']}}</label>
                      <p for="room-1-10-12">Slots: {{$bottomSlot['slot_available']}}</p>
                   </div>
            @endforeach 
        </div>
        <div class="profile-mes4">
            <label for="bottom_banner">Uplaod:</label>
            <input type="file" id="bottom_banner" wire:model="bottom_banner" name="bottom_banner" {{$required3}}>
        </div>

        <div class="recent-samaj-details"> 
            <p>Total - {{ number_format($totalAmount) }}</p>
        </div>

        <div class="recent-samaj-details">
            <input type="checkbox" class="d-inline" id="chb" name="chb" required>
            <label for="chb" class="form-check-label">
                &nbsp;I accept all terms and conditions.
            </label><br><br>
        </div>
    </div>
    <div class="feed-btns" >
        <button type="submit" value="submit" class="btn2">Pay & Submit Request</button>
    </div>
</form>