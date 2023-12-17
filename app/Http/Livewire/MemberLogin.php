<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\Member;
use Auth;

class MemberLogin extends Component
{
    public $users, $email, $password, $name;

    public function render()
    {
        return view('livewire.member-login');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('member')->attempt(['email' => $this->email, 'password' => $this->password])){ 
                return redirect('member/dashboard');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

}
