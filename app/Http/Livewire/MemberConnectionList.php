<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Connection;
use Auth;

class MemberConnectionList extends Component
{
    public $connections;
    public $perPage = 10;
    public $page = 1;

    public function mount()
    {
        $this->loadMore();
    }

    public function loadMore()
    {
        $newConnections = Connection::where('status','!=',2)->where('sender_id',@Auth::guard('member')->user()->id )->orWhere('receiver_id',@Auth::guard('member')->user()->id)->with(['sender', 'receiver'])->orderBy('id','DESC')
                                    ->skip(($this->page - 1) * $this->perPage)
                                    ->take($this->perPage)
                                    ->get();

        if ($this->connections === null) 
        {
            $this->connections = $newConnections;
        } 
        else 
        {
            $this->connections = $this->connections->merge($newConnections);
        }      
        // $this->connections = [...$this->connections, ...$newConnections];
        // $this->connections = $this->connections->merge($newConnections);    

        $this->page++;
    }

    public function render()
    {
        return view('livewire.member.member-connection-list');
    }

    public function updatedItems()
    {
        $this->dispatchBrowserEvent('scroll-loaded');
    }
}
