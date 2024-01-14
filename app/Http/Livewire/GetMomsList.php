<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mom;
use Auth;

class GetMomsList extends Component
{
    public $moms;
    public $perPage = 9;
    public $page = 1;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $newMoms = Mom::where('status',1)->orderBy('id','DESC')
                                                 ->skip(($this->page - 1) * $this->perPage)
                                                 ->take($this->perPage)
                                                 ->get();

        if ($this->moms === null) 
        {
            $this->moms = $newMoms;
        } 
        else 
        {
            $this->moms = $this->jobs->merge($newMoms);
        }     

        $this->page++;
    }

    public function render()
    {
        return view('livewire.member.get-moms-list');
    }
}
