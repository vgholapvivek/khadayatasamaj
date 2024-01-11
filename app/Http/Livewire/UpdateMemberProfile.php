<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Member;
use Auth;
use Hash;
use File;

class UpdateMemberProfile extends Component
{
    use WithFileUploads;

    public $memberDetails;
    public $data;
    public $memberId,$membershipNo, $firstName, $lastName, $whatsappNo, $gender, $dob, $bloodGroup, $maritalStatus,$anniversaryDate, $panNo, $address, $nativePlace, $state, $pinCode, $username, $email, $password, $passwordConfirmation, $memberPhoto,$chb;

    public function mount()
    {
        $this->getMembersData();
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'whatsappNo' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'bloodGroup' => 'required',
            'maritalStatus' => 'required',
            'anniversaryDate' => 'required',
            'panNo' => 'required',
            'address' => 'required',
            'nativePlace' => 'required',
            'state' => 'required',
            'pinCode' => 'required',
            'email' => 'required|email|unique:members,email,'.$this->memberId,
            // 'password' => 'required',
            // 'memberPhoto' => 'required', // 1MB Max
            // 'chb' => 'accepted',
        ]);       

        try
        {  
            if ($this->memberPhoto) 
            {                
                    $path = public_path('frontend/images/members/');
                   
                    $file = $this->memberPhoto;
                    $imageName = time() . $file->getClientOriginalName();
                    $path = $file->storeAs('frontend/images/members', $imageName,'real_public');
                    $validatedData['memberPhoto'] = '/'.$path;
            }

            if ($this->password)
            {
                $validatedData['password'] = Hash::make($this->password);
            } 

            if(Member::where('id',$this->memberId)->update($validatedData))
            {
                session()->flash('message', 'Profile Updated Successfully');
                return redirect()->to('/member/profile');
            }
        }
        catch(\Exception $e)
        {            
            dd($e);
        }
    }
    
    public function render()
    {
        return view('livewire.member.update-member-profile');
    }

    public function getMembersData()
    {
        $memberDetails = Member::find(@Auth::guard('member')->user()->id);
        $this->memberDetails            = $memberDetails;
        $this->memberId                 = $memberDetails->id;
        $this->firstName                = $memberDetails->firstName;
        $this->lastName                 = $memberDetails->lastName;
        $this->whatsappNo               = $memberDetails->whatsappNo;
        $this->gender                   = $memberDetails->gender;
        $this->dob                      = $memberDetails->dob;
        $this->bloodGroup               = $memberDetails->bloodGroup;
        $this->maritalStatus            = $memberDetails->maritalStatus;
        $this->anniversaryDate          = $memberDetails->anniversaryDate;
        $this->panNo                    = $memberDetails->panNo;
        $this->address                  = $memberDetails->address;
        $this->nativePlace              = $memberDetails->nativePlace;
        $this->state                    = $memberDetails->state;
        $this->pinCode                  = $memberDetails->pinCode;
        $this->email                    = $memberDetails->email;
        $this->password                 = '';//$memberDetails->password;
        $this->passwordConfirmation     = '';//$memberDetails->passwordConfirmation;
        $this->memberPhoto              = '';//$memberDetails->memberPhoto;
    }
}
