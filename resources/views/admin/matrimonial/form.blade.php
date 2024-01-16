<div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label>{{ 'Name' }}</label>
                <input name="name" value="{{ $matrimonial->name ?? old('name')}}"  type="text" class=" @error('name') is-invalid @enderror form-control">
                                                        
                @error('name')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
                <label>{{ 'Age' }}</label>
                <input name="age" value="{{ $matrimonial->age ?? old('age')}}"  type="text" class=" @error('age') is-invalid @enderror form-control">
                                                        
                @error('age')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
</div>
<div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('matrimonial') ? 'has-error' : ''}}">
                <label>{{ 'Image' }}</label>
                <input name="image" value="{{ $matrimonial->image ?? old('image')}}"  type="file" class=" @error('banner') is-invalid @enderror form-control">
                                                        
                @error('image')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @if(!empty($matrimonial->image))
            <div><img id="BannerPreview" src="{{asset($matrimonial->image)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
            @endif
        </div>
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('mobile_image') ? 'has-error' : ''}}">
                <label>{{ 'Mobile Image' }}</label>
                <input name="mobile_image" value="{{ $matrimonial->mobile_image ?? old('mobile_image')}}"  type="file" class=" @error('mobile_image') is-invalid @enderror form-control">
                                                        
                @error('mobile_image')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            @if(!empty($matrimonial->mobile_image))
            <div><img id="mobileBannerPreview" src="{{asset($matrimonial->mobile_image)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
            @endif
        </div>
</div>
<div class="row">
        <div class="col-sm-6">
                <div class="form-group {{ $errors->has('sequence') ? 'has-error' : ''}}">
                    <label>{{ 'Sequence' }}</label>
                        <input placeholder="Enter Sequence" name="sequence" value="{{ $matrimonial->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                        
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
                <div class="form-group {{ $errors->has('member_status') ? 'has-error' : ''}}">
                    <label>{{ 'Member Status' }}</label>
                        <select class="form-control" name="member_status">
                            @if(!empty($member_status))
                            
                            @foreach($member_status as $k=>$item)
                                    <option value="{{$k}}" {{isset($matrimonial) && $k = $matrimonial->member_status?"selected":""}}>{{$item}}</option> 
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

        <div class="col-sm-6">
                <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                    <label>{{ 'Status' }}</label>
                        <select class="form-control" name="status">
                            @if(!empty($status))
                            
                            @foreach($status as $k=>$item)
                                    <option value="{{$k}}" {{isset($matrimonial) && $k = $matrimonial->status?"selected":""}}>{{$item}}</option> 
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

