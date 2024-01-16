<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Models\Member;
use Livewire\Component;
use Illuminate\Http\Request;
use Session;
use Hash;
use Auth;

class FamilyMemberRegistration extends Component
{
    use WithFileUploads;
    
    public $firstName, $lastName, $whatsappNo, $gender, $dob, $maritalStatus, $panNo, $email, $password, $memberPhoto,$member_relation,$chb;

    public function mount()
    {
        session()->start();
    }

    public function submit()
    {
        $validatedData = $this->validate([
            // 'membershipNo' => 'required|unique:members,membershipNo',
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'whatsappNo' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            // 'bloodGroup' => 'required',
            'maritalStatus' => 'required',
            // 'anniversaryDate' => 'required',
            'panNo' => 'required',
            // 'address' => 'required',
            // 'nativePlace' => 'required',
            // 'state' => 'required',
            // 'pinCode' => 'required',
            // 'username' => 'required|unique:members,username',
            'email' => 'required|unique:members,email',
            'password' => 'required',
            'memberPhoto' => 'required', // 1MB Max
            'member_relation' => 'required',
            'chb' => 'accepted',
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
            
            $validatedData['password']   = Hash::make($this->password);
            $validatedData['created_by'] = @Auth::guard('member')->user()->id;
            $validatedData['status']     = 0;
           
            if(Member::create($validatedData))
            {
                // Member::create($data);
                session()->flash('message', 'Family Member successfully registered. Once admin approves member will be able to login');
                return redirect()->to('/member/membership-plan');
                // return view('livewire.member.family-member-registration');
            }
        }
        catch(\Exception $e)
        {            
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.member.family-member-registration');
    }
}
