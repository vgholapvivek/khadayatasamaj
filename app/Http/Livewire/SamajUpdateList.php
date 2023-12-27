<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SamajUpdateList extends Component
{
    public $updates;

    public function mount()
    {
        $this->loadUpdates();
    }

    public function loadUpdates()
    {
        $this->updates = Member::where('status',1)->orderBy('id','DESC')->take(2)->get();
    }

    public function render()
    {
        return view('livewire.member.samaj-update-list');
    }
}
