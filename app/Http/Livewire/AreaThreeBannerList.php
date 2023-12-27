<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdBanner;

class AreaThreeBannerList extends Component
{
    public $banners;

    public function mount()
    {
        $this->loadBanners();
    }

    public function loadBanners()
    {
        $this->banners = AdBanner::all();
    }

    public function render()
    {
        return view('livewire.shared.area-three-banner-list');
    }
}
