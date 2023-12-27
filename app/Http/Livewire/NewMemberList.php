<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;

class NewMemberList extends Component
{
    public $members;

    public function mount()
    {
        $this->loadMembers();
    }

    public function loadMembers()
    {
        $this->members = Member::where('status',1)->orderBy('id','DESC')->take(2)->get();
    }

    public function render()
    {
        return view('livewire.member.new-member-list');
    }
}
