<div>
 <!-- desktop banner start -->
 <section class="slider desk-banner">
    <div class="home-slider owl-carousel owl-theme">
        @if(isset($memberBanners) && $memberBanners->isNotEmpty())
           @foreach($memberBanners as $memberBanner)
                <div class="items">
                    <div class="img-back">
                        <img src="{{asset($memberBanner->banner)}}" class="img-fluid" alt="Khadayata Samaj">
                    </div>
                </div>
            @endforeach
        @endif

        @if(isset($adminBanners) && $adminBanners->isNotEmpty())
            @foreach($adminBanners as $adminBanner)
                <div class="items">
                    <div class="img-back">
                        <img src="{{asset($adminBanner->banner)}}" class="img-fluid" alt="Khadayata Samaj">
                    </div>
                </div>
            @endforeach
        @endif
        
        {{-- <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/banner1.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/banner2.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/banner3.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/banner4.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div> --}}
    </div>
</section>
<!-- desktop banner end -->

<!-- mobile banner start  -->
<section class="slider mob-banner">
    <div class="home-slider owl-carousel owl-theme">
        @if(isset($memberBanners) && $memberBanners->isNotEmpty())
           @foreach($memberBanners as $memberBanner)
                <div class="items">
                    <div class="img-back">
                        <img src="{{asset($memberBanner->banner)}}" class="img-fluid" alt="Khadayata Samaj">
                    </div>
                </div>
            @endforeach
        @endif

        @if(isset($adminBanners) && $adminBanners->isNotEmpty())
            @foreach($adminBanners as $adminBanner)
                <div class="items">
                    <div class="img-back">
                        <img src="{{asset($adminBanner->banner)}}" class="img-fluid" alt="Khadayata Samaj">
                    </div>
                </div>
            @endforeach
        @endif

        {{-- <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/home-mob-01.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/home-mob-02.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/home-mob-03.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div>
        <div class="items">
            <div class="img-back">
                <img src="{{asset('frontend/images/home-mob-04.webp')}}" class="img-fluid" alt="Khadayata Samaj">
            </div>
        </div> --}}

    </div>
</section>
<!-- mobile banner end  -->
</div>