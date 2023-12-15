<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('banner') ? 'has-error' : ''}}">
        <label>{{ 'Banner Image' }}</label>
        <input name="banner" value="{{ $adBanner1->banner ?? old('banner')}}"  type="file" class=" @error('banner') is-invalid @enderror form-control">
                                                   
        @error('banner')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    @if(!empty($adBanner1->banner))
    <div><img id="BannerPreview" src="{{asset($adBanner1->banner)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('mobile_banner') ? 'has-error' : ''}}">
        <label>{{ 'Mobile Banner Image' }}</label>
        <input name="mobile_banner" value="{{ $adBanner1->mobile_banner ?? old('mobile_banner')}}"  type="file" class=" @error('mobile_banner') is-invalid @enderror form-control">
                                                
        @error('mobile_banner')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  
    @if(!empty($adBanner1->mobile_banner))
    <div><img id="mobileBannerPreview" src="{{asset($adBanner1->mobile_banner)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>
</div>
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('sequence') ? 'has-error' : ''}}">
            <label>{{ 'Sequence' }}</label>
                <input placeholder="Enter Sequence" name="sequence" value="{{ $adBanner1->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>

<div class="row">

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

</div>


