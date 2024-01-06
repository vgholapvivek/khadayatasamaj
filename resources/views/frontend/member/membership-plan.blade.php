@extends('frontend.layouts.master')
@section('content')
@section('title', 'dashboard')

    @include('frontend.includes.shared.sponsers-banner')

    <section class="samaj-updates-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="member-plan-details">
                        <h6>Master Member – {{ @$memberDetails->parent->firstName ? $memberDetails->parent->firstName . ' ' .  $memberDetails->parent->firstName :  $memberDetails->firstName . ' ' . $memberDetails->lastName}}</h6>
                        <h6>Member Since – {{@$memberDetails->parent->firstName ? date('d/m/Y', strtotime(@$memberDetails->parent->created_at)) : date('d/m/Y', strtotime($memberDetails->created_at))}}</h6>
                        <h6>Payment Received – 1000 INR for (Life time membership)</h6>
                        <h6>Relation to Member – {{@$memberDetails->parent->firstName ? @$memberDetails->parent->member_relation : 'Self'}}</h6>
                    </div>
                    <div class="member-det-log">
                        <h2>+ Add Family Member</h2>
                    </div>
                    <div class="mess-radio-box">
                        <form >
                            <div class="profile-mes4">
                                <label>Add Member Name</label>
                                <div class="matri-gen">
                                    <input type="text" name="firstName" placeholder="First Name" required>
                                    {{-- <input type="text" name="name" placeholder="Middle Name"> --}}
                                    <input type="text" name="lastName" placeholder="Last Name" required>
                                </div>    
                            </div>
                            <div class="profile-mes4">
                                <label for="date" >Whatsapp No.</label>                                
                                <input  type="text" class="form-control" id="number" name="whatsappNo" placeholder="Enter your whatsapp no" required/>                                       
                            </div>
                            <div class="profile-mes4">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender"  class="form-control browser-default custom-select" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="profile-mes4">
                                <label for="date" >Date of Birth</label>
                                <div class="col-md-5">
                                    <div class="input-group date" id="datepicker">
                                        <input style="height: 38px;" type="date" class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY" />
                                        {{-- <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="profile-mes4">
                                <label>Marital Status </label>
                                <div class="matri-gen"> 
                                    <div class="form-check mat-chk">
                                        <input class="form-check-input martial-chec" type="radio" name="maritalStatus" id="flexRadioDefault3" value="Married" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">Married</label>
                                    </div>
                                    <div class="form-check mat-chk">
                                        <input class="form-check-input martial-chec" type="radio" name="maritalStatus" id="flexRadioDefault4" value="Unmarried">
                                        <label class="form-check-label" for="flexRadioDefault4">Unmarried</label>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-mes4">
                                <label>PAN No.</label>
                                <input type="text" name="panNo" placeholder="Enter your PAN No." required="">
                            </div>
                            
                            <div class="profile-mes4">
                                <label>Relationship</label>
                                <input type="text" name="member_relation" placeholder="Father/Mother/Son/Wife/Daughter" required="">
                            </div>
                            <div class="profile-mes4">
                                <label>Email Id</label>
                                <input type="text" name="email" placeholder="Enter Email Id" required="">
                            </div>
                            <div class="profile-mes4">
                                <label>Assign Password </label>
                                <input type="text" name="password" placeholder="Minimum 12 Characters with Number +1 Special Character" required="">
                            </div>
                            <div class="profile-mes4">
                                <label>Member's Photo</label>
                                <input style="background: white;"  type="file" id="memberPhoto" name="memberPhoto" accept="image/*" />
                                @error('memberPhoto') <span class="text-danger">{{ $message }}</span> @enderror    
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-4">
                                    <div class="achie-agree">
                                        <h4><u>1000 INR</u></h4>
                                        <p>I Agree to <u>terms and conditions</u></p>
                                        <a href="#" class="btn btn-style05">Pay Now</a>
                                    </div><br>
                                </div>
                            </div> --}}
                            <div class="profile-mes4">
                                <input type="checkbox" class="d-inline" id="chb" name="chb"  value="1">
                                <label for="chb" class="form-check-label">&nbsp;I Agree to pay Rs. 1000 INR and <u>terms and conditions </label>
                            </div>

                             <div class="row">
                                {{-- <div class="col-md-4"> --}}
                                    <div class="achie-agree">                                       
                                        <a href="#" class="btn btn-style05">Create Member & Pay</a>
                                    </div>
                                    <br>
                                {{-- </div> --}}
                            </div>
                        </form>
                        {{-- <div class="member-det-log">
                            <a href="#" class="btn btn-style05">+ Add Family Member</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')   
    
@endsection