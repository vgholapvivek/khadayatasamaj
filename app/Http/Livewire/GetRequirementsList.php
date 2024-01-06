<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Requirement;
use Auth;

class GetRequirementsList extends Component
{
    public $requirements;
    public $ad_type;
    public $perPage = 9;
    public $page = 1;

    public function mount($ad_type)
    {
        $this->ad_type = $ad_type;
        $this->loadData();
    }

    public function loadData()
    {
        $newRequirements = Requirement::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',$this->ad_type)->orderBy('id','DESC')
                                                 ->skip(($this->page - 1) * $this->perPage)
                                                 ->take($this->perPage)
                                                 ->get();

        if ($this->requirements === null) 
        {
            $this->requirements = $newRequirements;
        } 
        else 
        {
            $this->requirements = $this->requirements->merge($newRequirements);
        }     
    }

    public function render()
    {
        return view('livewire.member.requirements.get-requirements-list');
    }
}
