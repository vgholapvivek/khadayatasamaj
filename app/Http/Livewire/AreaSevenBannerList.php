<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdBanner;
use Carbon\Carbon;

class AreaSevenBannerList extends Component
{
    public $areaSevenBanner;
    public $startDate;
    public $endDate;

    public function mount()
    {
        $this->loadDates();
        $this->loadBanners();
    }

    public function loadDates()
    {
        $now = Carbon::now();
        $this->startDate = $now->startOfWeek()->format('Y-m-d');
        $this->endDate = $now->endOfWeek()->format('Y-m-d');
    }

    public function loadBanners()
    {
        $this->areaSevenBanner = AdBanner::where('type','member')->where('banner_type','bottom_banner')->where('status',1)->where('start_date','>=',$this->startDate)->where('end_date','<=',$this->endDate)->first();
    }
    
    public function render()
    {
        return view('livewire.shared.area-seven-banner-list');
    }
}
