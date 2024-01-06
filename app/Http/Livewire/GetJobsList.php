<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Auth;


class GetJobsList extends Component
{
    public $jobs;
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
        $newJobs = Job::where('created_by',@Auth::guard('member')->user()->id)->where('ad_type',$this->ad_type)->orderBy('id','DESC')
                                                 ->skip(($this->page - 1) * $this->perPage)
                                                 ->take($this->perPage)
                                                 ->get();

        if ($this->jobs === null) 
        {
            $this->jobs = $newJobs;
        } 
        else 
        {
            $this->jobs = $this->jobs->merge($newJobs);
        }     

        $this->page++;
    }
    
    public function render()
    {
        return view('livewire.member.jobs.get-jobs-list');
    }

}
