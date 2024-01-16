<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use Auth;
use Illuminate\Validation\Rule;
use App\Models\AdBanner;

class MemberUploadBanner extends Component
{
    use WithFileUploads;

    public $totalAmount = 0;
    public $checkbox1 = false;
    public $checkbox2 = false;
    public $checkbox3 = false;

    public $required1 = '';
    public $required2 = '';
    public $required3 = '';

    public $start_date;
    public $end_date;

    public $topBannerSlot  = null;
    public $middleBannerSlot = null;
    public $bottomBannerSlot = null;

    public $top_banner, $middle_banner, $bottom_banner;

    public $topSlot    = null;
    public $middleSlot = null;
    public $bottomSlot = null;

    public function updatedCheckbox1()
    {
        $this->updateTotalAmount();
        if($this->checkbox1)
        {
            $this->required1 = 'required';
        }
        else
        {
            $this->required1 = '';
        }
    }

    public function updatedCheckbox2()
    {
        $this->updateTotalAmount();
        if($this->checkbox2)
        {
            $this->required2 = 'required';
        }
        else
        {
            $this->required2 = '';
        }
    }

    public function updatedCheckbox3()
    {
        $this->updateTotalAmount();
        if($this->checkbox3)
        {
            $this->required3 = 'required';
        }
        else
        {
            $this->required3 = '';
        }
    }

    private function updateTotalAmount()
    {
        $this->totalAmount = 0;

        if ($this->checkbox1) 
        {
            $this->totalAmount += 5000; // Adjust the amount based on your requirement
        }

        if ($this->checkbox2) 
        {
            $this->totalAmount += 5000; // Adjust the amount based on your requirement
        }

        if ($this->checkbox3) 
        {
            $this->totalAmount += 5000; // Adjust the amount based on your requirement
        }
    }

    public function submit()
    {
        try
        { 
            if($this->checkbox1)
            {
                if ($this->top_banner) 
                {                
                        $path = public_path('frontend/images/banner/');
                       
                        $file = $this->top_banner;
                        $imageName = time() . $file->getClientOriginalName();
                        $path = $file->storeAs('frontend/images/banner', $imageName,'real_public');
                        $topBannerData['banner'] = '/'.$path;
                }

                $date =  explode("-", $this->topSlot);

                $topBannerData['sequence']    = 1;
                $topBannerData['start_date']  = $date[0];
                $topBannerData['end_date']    = $date[1];
                $topBannerData['type']        = 'member';
                $topBannerData['banner_type'] = 'top_banner';
                $topBannerData['status']      = 1;
                $topBannerData['created_by']  = @Auth::guard('member')->user()->id;
                AdBanner::create($topBannerData);
            }

            if($this->checkbox2)
            {
                if ($this->middle_banner) 
                {                
                        $path = public_path('frontend/images/banner/');
                       
                        $file = $this->middle_banner;
                        $imageName = time() . $file->getClientOriginalName();
                        $path = $file->storeAs('frontend/images/banner', $imageName,'real_public');
                        $topBannerData['banner'] = '/'.$path;
                }

                $date =  explode("-", $this->middleSlot);

                $topBannerData['sequence']    = 1;
                $topBannerData['start_date']  = $date[0];
                $topBannerData['end_date']    = $date[1];
                $topBannerData['type']        = 'member';
                $topBannerData['banner_type'] = 'middle_banner';
                $topBannerData['status']      = 1;
                $topBannerData['created_by']  = @Auth::guard('member')->user()->id;
                AdBanner::create($topBannerData);
            }

            if($this->checkbox3)
            {
                if ($this->bottom_banner) 
                {                
                        $path = public_path('frontend/images/banner/');
                       
                        $file = $this->bottom_banner;
                        $imageName = time() . $file->getClientOriginalName();
                        $path = $file->storeAs('frontend/images/banner', $imageName,'real_public');
                        $topBannerData['banner'] = '/'.$path;
                }

                $date =  explode("-", $this->bottomSlot);

                $topBannerData['sequence']    = 1;
                $topBannerData['start_date']  = $date[0];
                $topBannerData['end_date']    = $date[1];
                $topBannerData['type']        = 'member';
                $topBannerData['banner_type'] = 'bottom_banner';
                $topBannerData['status']      = 1;
                $topBannerData['created_by']  = @Auth::guard('member')->user()->id;
                AdBanner::create($topBannerData);
            }

           
            session()->flash('message', 'Request registered successfully');
            return redirect()->to('/member/banners');
        }
        catch(\Exception $e)
        {            
            dd($e);
        }
    }

    public function generateTopBannerSlot()
    {
        $count = 6;
        $this->topBannerSlot = null;
        $currentMonth = date('Y-m-01');

        for($i=0; $i < $count; $i++)
        {
            $slotData['date']  =  date("Y/m/01", strtotime($currentMonth . " + $i months")) . '-' . date("Y/m/t", strtotime($currentMonth . " + $i months"));

            $bannerCount  = AdBanner::where('banner_type', 'top_banner')->where('type','member')->where('start_date',date("Y-m-01", strtotime($currentMonth . " + $i months")))->where('end_date',date("Y-m-t", strtotime($currentMonth . " + $i months")))->get()->count();
            if($bannerCount < 4)
            {
                $slotData['slot_available'] =  4 - $bannerCount;
                $this->topBannerSlot[]      = $slotData;
            }            
        }
    }

    public function generateMiddleBannerSlot()
    {
        $count = 6;
        $this->middleBannerSlot = null;
        $currentMonth = date('Y-m-01');

        for($i=0; $i < $count; $i++)
        {
            $slotData['date']  =  date("Y/m/01", strtotime($currentMonth . " + $i months")) . '-' . date("Y/m/t", strtotime($currentMonth . " + $i months"));

            $bannerCount  = AdBanner::where('banner_type', 'middle_banner')->where('type','member')->where('start_date',date("Y-m-01", strtotime($currentMonth . " + $i months")))->where('end_date',date("Y-m-t", strtotime($currentMonth . " + $i months")))->get()->count();
            if($bannerCount < 1)
            {
                $slotData['slot_available'] =  4 - $bannerCount;
                $this->middleBannerSlot[]   = $slotData;
            }    
        }
    }

    public function generateBottomBannerSlot()
    {
        $count = 6;
        $this->bottomBannerSlot = null;
        $currentMonth = date('Y-m-01');

        for($i=0; $i < $count; $i++)
        {
            $slotData['date']  =  date("Y/m/01", strtotime($currentMonth . " + $i months")) . '-' . date("Y/m/t", strtotime($currentMonth . " + $i months"));
            
            $bannerCount  = AdBanner::where('banner_type', 'bottom_banner')->where('type','member')->where('start_date',date("Y-m-01", strtotime($currentMonth . " + $i months")))->where('end_date',date("Y-m-t", strtotime($currentMonth . " + $i months")))->get()->count();
            if($bannerCount < 1)
            {
                $slotData['slot_available'] =  4 - $bannerCount;
                $this->bottomBannerSlot[]   = $slotData;
            }    
        }
    }

    public function render()
    {
        $this->generateTopBannerSlot();
        $this->generateMiddleBannerSlot();
        $this->generateBottomBannerSlot();
        return view('livewire.member.member-upload-banner');
    }
}
