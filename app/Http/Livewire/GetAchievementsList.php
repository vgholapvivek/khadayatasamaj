<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Achivementbymember;
use Auth;

class GetAchievementsList extends Component
{
    public $achievements;
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
        $newAchievements = Achivementbymember::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',$this->ad_type)->orderBy('id','DESC')
                                                 ->skip(($this->page - 1) * $this->perPage)
                                                 ->take($this->perPage)
                                                 ->get();

        if ($this->achievements === null) 
        {
            $this->achievements = $newAchievements;
        } 
        else 
        {
            $this->achievements = $this->achievements->merge($newAchievements);
        }     

        $this->page++;
    }
    
    public function render()
    {
        return view('livewire.member.achievements.get-achievements-list');
    }
}
