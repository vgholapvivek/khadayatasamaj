<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('banner') ? 'has-error' : ''}}">
        <label>{{ 'Banner Image' }}</label>
        <input name="banner" value="{{ $adBanner->banner ?? old('banner')}}"  type="file" class=" @error('banner') is-invalid @enderror form-control">
                                                   
        @error('banner')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    @if(!empty($adBanner->banner))
    <div><img id="BannerPreview" src="{{asset($adBanner->banner)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('mobile_banner') ? 'has-error' : ''}}">
        <label>{{ 'Mobile Banner Image' }}</label>
        <input name="mobile_banner" value="{{ $adBanner->mobile_banner ?? old('mobile_banner')}}"  type="file" class=" @error('mobile_banner') is-invalid @enderror form-control">
                                                
        @error('mobile_banner')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  
    @if(!empty($adBanner->mobile_banner))
    <div><img id="mobileBannerPreview" src="{{asset($adBanner->mobile_banner)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>
</div>
<div class="row">
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('sequence') ? 'has-error' : ''}}">
            <label>{{ 'Sequence' }}</label>
                <input placeholder="Enter Sequence" name="sequence" value="{{ $adBanner->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
            <label>{{ 'User Type' }}</label>
                <select class="form-control" name="type">
                    <option value="admin"> Admin </option> 
                    <option value="member">Member</option>
                </select>                                    
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('banner_type') ? 'has-error' : ''}}">
            <label>{{ 'Banner Type' }}</label>
                <select class="form-control" name="banner_type">
                    <option value="top_banner"> Top Banner </option> 
                    <option value="middle_banner">Middle Banner</option>
                    <option value="bottom_banner">Bottom Banner</option>
                </select>                                    
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>

<div class="col-sm-6">
        <div class="form-group {{ $errors->has('member_status') ? 'has-error' : ''}}">
            <label>{{ 'Member Status' }}</label>
                <select class="form-control" name="member_status">
                     @if(!empty($member_status))
                    
                       @foreach($member_status as $k=>$item)
                            <option value="{{$k}}" {{isset($adBanner) && $k = $adBanner->member_status?"selected":""}}>{{$item}}</option> 
                       @endforeach
                     @endif
                </select>                                    
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
            <label>{{ 'Status' }}</label>
                <select class="form-control" name="status">
                     @if(!empty($status))
                    
                       @foreach($status as $k=>$item)
                            <option value="{{$k}}" {{isset($adBanner) && $k = $adBanner->status?"selected":""}}>{{$item}}</option> 
                       @endforeach
                     @endif
                </select>                                    
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
</div>
<div class="row">

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

</div>

