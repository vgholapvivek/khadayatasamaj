<form wire:submit.prevent="submit" method="post" enctype="multipart/form-data">
    <input type="hidden" name="full_name" value="" />
	<input type="hidden" name="group[]" value="4" />  
    
    <div class="row jumbotron  register-form">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center">Membership Form</h2>
                            <p>Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........</p>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="name-f">Membership No. / Receipt No.</label>
                            <input type="text" wire:model="membershipNo" class="form-control" name="memobership_no" id="memobership_no" placeholder="Enter Membership No. / Receipt No" >
                            @error('membershipNo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">First Name</label>
                            <input type="text" wire:model="firstName" class="form-control" name="firstname" id="firstname" placeholder="Enter your first name"  >
                            @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Last name</label>
                            <input type="text" class="form-control" wire:model="lastName" name="lastname" id="lastname" placeholder="Enter your last name" >
                            @error('lastName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="tel">Whatsapp No.</label>
                            <input type="text" wire:model="whatsappNo" name="whatsappno" class="form-control" id="whatsappno" placeholder="Enter Your Whatsapp No" >
                            @error('whatsappNo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="sex">Gender</label>
                            <select id="gender" name="gender" wire:model="gender" class="form-control browser-default custom-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Date">Date Of Birth</label>
                            <input type="Date" wire:model="dob" name="dob" class="form-control" id="dob" placeholder="Enter Your Date Of Birth" >
                            @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Blood Group</label>
                            <input type="text" class="form-control" wire:model="bloodGroup" name="blood_group" id="blood_group" placeholder="Enter your Blood Group"  >
                            @error('bloodGroup') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group reg-mart">
                            <div class="col-sm-3 form-group">
                                <label for="name-f">Marital Status:</label> 
                            </div>
                            <div class="marital-form">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="maritalStatus" name="marital_status" id="flexRadioDefault1" value="Married">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Married 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="maritalStatus" name="marital_status" id="flexRadioDefault2" value="Unmarried" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Unmarried
                                    </label>
                                </div>
                            </div>
                            @error('maritalStatus')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Anniversary Date</label>
                            <input type="date" wire:model="anniversaryDate" name="anniversary_date" class="form-control" id="anniversary_date" placeholder="Enter Your Anniversary Date" >
                            @error('anniversaryDate') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="tel">PAN No.</label>
                            <input type="text" name="pan_no" wire:model="panNo" class="form-control" id="pan_no" placeholder="Enter Your PAN No" >
                            @error('panNo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Address</label>
                            <input type="text" wire:model="address" class="form-control" name="address" id="address" placeholder="Enter Your Locality/House/Street no" >
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Native Place</label>
                            <input type="text" class="form-control" wire:model="nativePlace" name="native_place" id="native_place" placeholder="Enter Your Native Place"  >
                            @error('nativePlace') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="State">State</label>
                            <input type="text" class="form-control" wire:model="state" name="state" id="state" placeholder="Enter your state name" >
                            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-2 form-group">
                            <label for="zip">Pin Code</label>
                            <input type="text" class="form-control" wire:model="pinCode" name="pincode" id="pincode" placeholder="Pin Code" >
                            @error('pinCode') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Username</label>
                            <input type="text" class="form-control" wire:model="username" name="username" id="username" placeholder="Username"  autocomplete="off">
                            @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" wire:model="email" name="email" id="email" placeholder="email" autocomplete="off">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" wire:model="password" class="form-control" id="password" placeholder="Enter your password" autocomplete="off">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="pass2">Confirm Password</label>
                            <input type="password" name="password_confirmation" wire:model="passwordConfirmation" class="form-control" id="pass2" placeholder="Re-enter your password" >
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Member's Photo</label>
                            <input style="background: white;" wire:model="memberPhoto" type="file" id="photo_path" name="photo_path" accept="image/*" />
                            @error('memberPhoto') <span class="text-danger">{{ $message }}</span> @enderror
                            @if ($memberPhoto)
                                Photo Preview:
                                <img src="{{ $memberPhoto->temporaryUrl() }}">
                            @endif

                        </div>
                        <div class="col-sm-12">
                            <input type="hidden" name="chb" value="0" />
                            <input type="checkbox" class="d-inline" wire:model="chb" id="chb" name="chb"  value="1">
                            <label for="chb"
                                class="form-check-label">&nbsp;I accept all terms and conditions.
                            </label>
                        </div>
						
                        <div class="col-sm-12 form-group reg-submit">
                            <input type="hidden" name="banned" value="1" />
                                <input type="submit" class="btn btn-style1 float-right" value="Submit">
                                
                            </div> 
                        </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</form>
