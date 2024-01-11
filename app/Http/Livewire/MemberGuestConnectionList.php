<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Connection;
use Auth;

class MemberGuestConnectionList extends Component
{
    public $guestConnections;
    public $perPage = 10;
    public $page = 1;

    public function mount()
    {
        $this->loadMore();
    }

    public function loadMore()
    {
        $newGuestConnections = Connection::where('status',2)->where('sender_id',@Auth::guard('member')->user()->id )->orWhere('receiver_id',@Auth::guard('member')->user()->id)->with(['sender', 'receiver'])->orderBy('id','DESC')
                                        ->skip(($this->page - 1) * $this->perPage)
                                        ->take($this->perPage)
                                        ->get();

        if ($this->guestConnections === null) 
        {
            $this->guestConnections = $newGuestConnections;
        } 
        else 
        {
            $this->guestConnections = $this->guestConnections->merge($newGuestConnections);
        }     

        $this->page++;
    }

    public function render()
    {
        return view('livewire.member.member-guest-connection-list');
    }

    public function updatedItems()
    {
        $this->dispatchBrowserEvent('loaded-scroll');
    }
}
