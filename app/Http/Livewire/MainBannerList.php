<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdBanner;
use Carbon\Carbon;

class MainBannerList extends Component
{
    public $memberBanners;
    public $adminBanners;

    public $memberBannerCount;

    public $startDate;
    public $endDate;

    public function mount()
    {
        $this->loadDates();
        $this->loadMemberBanners();
        $this->loadAdminBanners();
    }

    public function loadDates()
    {
        $now = Carbon::now();
        $this->startDate = $now->startOfWeek()->format('Y-m-d');
        $this->endDate = $now->endOfWeek()->format('Y-m-d');
    }

    public function loadMemberBanners()
    {
        $this->memberBanners = AdBanner::where('type','member')->where('banner_type','top_banner')->where('status',1)->where('start_date','>=',$this->startDate)->where('end_date','<=',$this->endDate)->get();

        if(isset($this->memberBanners) && $this->memberBanners->isNotEmpty())
        {
            $this->memberBannerCount = $this->memberBanners->count();
        }
        else
        {
            $this->memberBannerCount = 0;
        }
    }

    public function loadAdminBanners()
    {
        if($this->memberBannerCount < 4)
        {
            $this->adminBanners = AdBanner::where('type','admin')->where('banner_type','top_banner')->where('status',1)->take(4 - $this->memberBannerCount)->get();
        }
    }

    public function render()
    {
        return view('livewire.shared.main-banner-list');
    }
}
