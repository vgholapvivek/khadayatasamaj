<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\Members;


class MemberLogin extends Component
{
    public $users, $email, $password, $name;
    
    public function render()
    {    
        return view('livewire.member-login');
    }

   
    public function login()
    {
        dd($this->users);
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        if(Auth::guard('member')->attempt(['email' => $this->email, 'password' => $this->password])){ 
                return redirect('home');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

}
