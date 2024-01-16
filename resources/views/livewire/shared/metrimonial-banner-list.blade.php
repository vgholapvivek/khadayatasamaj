<div>
<!-- khadayata-Samaj metrimonial section start -->
<section class="khadayat-samaj-matrimonials animate fadeInRight three">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="matrimonials-samaj">
                    @if(isset($maleMatrimonialBanners) && $maleMatrimonialBanners->isNotEmpty())
                       @foreach($maleMatrimonialBanners as $maleMatrimonialBanner)
                            <div class="mat-det">
                                <img src="{{asset($maleMatrimonialBanner->image)}}" class="img-fluid" alt="matrimonials">
                                <p><b>Name: {{$maleMatrimonialBanner->first_name . ' ' . $maleMatrimonialBanner->last_name}}</b></p>
                                <p><b>Age: {{$maleMatrimonialBanner->age}}</b></p>
                            </div>
                       @endforeach
                    @else
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men2.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    @endif
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="matrimonilas-title">
                    <h4>Matrimonials Ad 2 Banner</h4>
                </div>
            </div>
            <div class="col-md-5">
                <div class="matrimonials-samaj">
                    @if(isset($femaleMatrimonialBanners) && $femaleMatrimonialBanners->isNotEmpty())
                       @foreach($femaleMatrimonialBanners as $femaleMatrimonialBanner)
                            <div class="mat-det">
                                <img src="{{asset($femaleMatrimonialBanner->image)}}" class="img-fluid" alt="matrimonials">
                                <p><b>Name: {{$femaleMatrimonialBanner->first_name . ' ' . $femaleMatrimonialBanner->last_name}}</b></p>
                                <p><b>Age: {{$femaleMatrimonialBanner->age}}</b></p>
                            </div>
                       @endforeach
                    @else
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- khadayata-Samaj metrimonial section end -->
</div>