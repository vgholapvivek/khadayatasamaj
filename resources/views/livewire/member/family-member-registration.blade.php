<form wire:submit.prevent="submit" method="post" enctype="multipart/form-data"> 

    <div class="profile-mes4">
        <label>Add Member Name</label>
        <div class="matri-gen">
            <input type="text" wire:model="firstName" name="firstName" placeholder="First Name">
            @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
            
            <input type="text" wire:model="lastName" name="lastName" placeholder="Last Name" >
            @error('lastName') <span class="text-danger">{{ $message }}</span> @enderror
        </div>    
    </div>

    <div class="profile-mes4">
        <label for="number" >Whatsapp No.</label>                                
        <input  type="text" class="form-control" id="number" wire:model="whatsappNo" name="whatsappNo" placeholder="Enter your whatsapp no" />         
        @error('whatsappNo') <span class="text-danger">{{ $message }}</span> @enderror                              
    </div>

    <div class="profile-mes4">
        <label for="gender">Gender</label>
        <select id="gender" wire:model="gender" name="gender" class="form-control browser-default custom-select">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        @error('gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="profile-mes4">
        <label for="date" >Date of Birth</label>
        <input style="height: 38px;" type="date" class="form-control" id="dob" wire:model="dob" name="dob" placeholder="MM/DD/YYYY" >
        @error('dob')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="profile-mes4">
        <label>Marital Status </label>
        <div class="matri-gen"> 
            <div class="form-check mat-chk">
                <input class="form-check-input martial-chec" type="radio" wire:model="maritalStatus" name="maritalStatus" id="flexRadioDefault3" value="Married" checked>
                <label class="form-check-label" for="flexRadioDefault3">Married</label>
            </div>
            <div class="form-check mat-chk">
                <input class="form-check-input martial-chec" type="radio" wire:model="maritalStatus" name="maritalStatus" id="flexRadioDefault4" value="Unmarried">
                <label class="form-check-label" for="flexRadioDefault4">Unmarried</label>
            </div>
        </div>
    </div>

    <div class="profile-mes4">
        <label>PAN No.</label>
        <input type="text" wire:model="panNo" name="panNo" placeholder="Enter your PAN No." >
        @error('panNo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="profile-mes4">
        <label>Relationship</label>
        <input type="text" wire:model="member_relation" name="member_relation" placeholder="e.g. Father-Son/Son-Father" >
        @error('member_relation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="profile-mes4">
        <label>Email Id</label>
        <input type="text" wire:model="email" name="email" placeholder="Enter Email Id" >
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="profile-mes4">
        <label>Assign Password </label>
        <input type="text" wire:model="password" name="password" placeholder="Minimum 12 Characters with Number +1 Special Character" >
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="profile-mes4">
        <label>Member's Photo</label>
        <input style="background: white;"  type="file" id="memberPhoto" wire:model="memberPhoto" name="memberPhoto" accept="image/*" />
        @error('memberPhoto') <span class="text-danger">{{ $message }}</span> @enderror    
    </div>
    
    <div class="profile-mes4">
        <input type="checkbox" class="d-inline" id="chb" wire:model="chb" name="chb"  value="1" required>
        <label for="chb" class="form-check-label">&nbsp;I Agree to pay Rs. 1000 INR and <u>terms and conditions </label>
    </div>
    
    <div class="col-sm-12 form-group reg-submit">
            <input type="submit" class="btn btn-style05" value="Create Member & Pay">            
    </div>				            
</form>
