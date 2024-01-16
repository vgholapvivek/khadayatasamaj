<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Matrimonial;
use Carbon\Carbon;

class MetrimonialBannerList extends Component
{
    public   $maleMatrimonialBanners;
    public $femaleMatrimonialBanners;

    public $startDate;
    public $endDate;

    public function mount()
    {
        $this->loadDates();
        $this->loadMatrimonialBanners();
    }

    public function loadDates()
    {
        $now = Carbon::now();
        $this->startDate = $now->startOfWeek()->format('Y-m-d');
        $this->endDate = $now->endOfWeek()->format('Y-m-d');
    }

    public function loadMatrimonialBanners()
    {
        $this->maleMatrimonialBanners = Matrimonial::where('gender','male')->where('status',1)->where('date','>=',$this->startDate)->where('date','<=',$this->endDate)->take(2)->get();
        $this->femaleMatrimonialBanners = Matrimonial::where('gender','female')->where('status',1)->where('date','>=',$this->startDate)->where('date','<=',$this->endDate)->take(2)->get();
    }

    public function render()
    {
        return view('livewire.shared.metrimonial-banner-list');
    }
}
