<form wire:submit.prevent="submit" method="post" name="form_user" id="form_user" enctype="multipart/form-data">
        <input type="hidden" name="memberId" value="{{$memberDetails->id}}" />
        {{-- <div class="profile-fom">
            <label>Memobership No</label>
            <input type="text" name="memobershipno" placeholder="9820938936" value="{{$memberDetails->membershipNo}}" readonly>
        </div> --}}
        <div class="profile-fom">
            <label>First Name</label>
            <input type="text" wire:model="firstName" name="firstName" placeholder="Mr Jiteen Luniia" value="{{$memberDetails->firstName}}">
        </div>

        <div class="profile-fom">
            <label>Last Name</label>
            <input type="text" wire:model="lastName" name="lastName" placeholder="Mr Jiteen Luniia" value="{{$memberDetails->lastName}}">
        </div>

        <div class="profile-fom">
            <label>Whatsapp No.</label>
            <input type="text" wire:model="whatsappNo"  name="whatsappNo" placeholder="9820938936" value="{{$memberDetails->whatsappNo}}">
        </div>

        <div class="profile-fom">
            <label>Gender</label>
            <select name="gender" id="gender" wire:model="gender" required>
                <option value="">Select Gender </option>
                <option value="male" {{$memberDetails->gender == 'male' ? 'selected' : ''}}>Male</option>
                <option value="female" {{$memberDetails->gender == 'female' ? 'selected' : ''}}>Female</option>
            </select>    
        </div>

        <div class="profile-fom">
            <label>Date Of Birth</label>
            <input type="Date" name="dob" wire:model="dob" placeholder="Date Of Birth" value="{{$memberDetails->dob}}">
        </div>

        <div class="profile-fom">
            <label>Blood Group</label>
            <input type="text" name="bloodGroup" wire:model="bloodGroup" placeholder="Edit Blood Group" value="{{$memberDetails->bloodGroup}}">
        </div>

        <div class="profile-fom">
            <label>Marital Status</label>
            <input type="radio" name="maritalStatus" wire:model="maritalStatus" id="married"  value="Married" {{$memberDetails->maritalStatus == 'Married' ? 'checked' : ''}}><label for="married">Married</label>
            <input type="radio" name="maritalStatus" wire:model="maritalStatus" id="unmarried"  value="Unmarried" {{$memberDetails->maritalStatus == 'Unmarried' ? 'checked' : ''}}><label for="unmarried">Unmarried</label>
        </div>

        <div class="profile-fom">
            <label>Anniversary Date</label>
            <input type="Date" name="anniversaryDate" wire:model="anniversaryDate" placeholder="Date Of Birth" value="{{$memberDetails->anniversaryDate}}">
        </div>

        <div class="profile-fom">
            <label>Pan No.</label>
            <input type="text" name="panNo" wire:model="panNo" value="{{$memberDetails->panNo}}"">
        </div>

        <div class="profile-fom">
            <label>Address</label>
            <input type="text" name="address" wire:model="address" placeholder="Edit Full Address Here" value="{{$memberDetails->address}}"">
        </div>

        <div class="profile-fom">
            <label>Native Place</label>
            <input type="text" name="nativPlace" wire:model="nativPlace" value="{{$memberDetails->nativPlace}}"">
        </div>

        <div class="profile-fom">
            <label>State</label>
            <input type="text" name="state" wire:model="state" value="{{$memberDetails->state}}"">
        </div>

        <div class="profile-fom">
            <label>Pin Code</label>
            <input type="text" name="pinCode" wire:model="pinCode" value="{{$memberDetails->pinCode}}"">
        </div>

        <div class="profile-fom">
            <label>Email Address </label>
            <input type="text" name="email" wire:model="email" placeholder="jiten@Hotmail.com" value="{{$memberDetails->email}}">
        </div>

        <div class="profile-fom">
            <label for="pass">Password</label>
            <input type="password" name="password" wire:model="password" class="form-control" id="password" placeholder="Enter your password" autocomplete="off" value="">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="profile-fom">
            <label for="pass2">Confirm Password</label>
            <input type="password" name="password_confirmation" wire:model="password_confirmation" class="form-control" id="pass2" placeholder="Re-enter your password" >
        </div>
        

        <!-- <div class="profile-fom">
        <label>My Profile PIC</label>
        <input name="file" type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" required="">
        </div> -->
        
        <div class="profile-fom">
            <label>My Profile PIC</label>
            <input type="file" id="choose-file" name="memberPhoto" wire:model="memberPhoto" accept="image/*" />
            <div id="img-preview" class="profile-pre">
                <img src="{{$memberDetails->memberPhoto}}"  height="100px" width="100px">
            </div>
        </div>

        <div class="profile-fom2">
            <button type="submit" value="submit" class="btn2">UPDATE</button>
        </div>

</form>
