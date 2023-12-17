<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Models\Member;
use Livewire\Component;
use Illuminate\Http\Request;
use Session;
use Hash;

class MemberRegistration extends Component
{
    use WithFileUploads;
    
    public $membershipNo, $firstName, $lastName, $whatsappNo, $gender, $dob, $bloodGroup, $maritalStatus,$anniversaryDate, $panNo, $address, $nativePlace, $state, $pinCode, $username, $email, $password, $passwordConfirmation, $memberPhoto,$chb;

    public function mount()
    {
        session()->start();
    }
    public function submit()
    {
        $data = array();
        $validatedData = $this->validate([
            'membershipNo' => 'required|unique:members,membershipNo',
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
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
            'username' => 'required|unique:members,username',
            'email' => 'required|unique:members,email',
            'password' => 'required',
            'memberPhoto' => 'required', // 1MB Max
            'chb' => 'accepted',
        ]);       

        try
        {  
            if ($this->memberPhoto) 
            {                
                    $path = public_path().'/sfrontend/images/members/';
                   
                    if(!File::isDirectory($path))
                    {
                        File::makeDirectory($path, 0777, true, true);
                    }   
                   
                    $file = $this->memberPhoto;
                    $imageName = $file->getClientOriginalName();
                    $path = $this->memberPhoto->storeAs('frontend/images/members', $imageName, 'public');
                    $validatedData['memberPhoto'] = $path;
            }
            
            $validatedData['password'] = Hash::make('password');
            // $validatedData['status']   = 0;
           
            if(Member::create($validatedData))
            {
                Member::create($data);
                session()->flash('message', 'Member successfully registered.');
                return view('livewire.member-registration');
            }
        }
        catch(\Exception $e)
        {            
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.member-registration');
    }
}
