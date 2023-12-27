<div class="row">
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            <label>{{ 'Title' }}</label>
                <input placeholder="Enter Title" name="title" value="{{ $requirement->title ?? old('title')}}"  type="text" class=" @error('title') is-invalid @enderror form-control">
                                                
                @error('title')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('') ? 'has-error' : ''}}">
        <label>{{ 'Image' }}</label>
        <input name="image" value="{{ $requirement->image ?? old('image')}}"  type="file" class=" @error('image') is-invalid @enderror form-control">
                                                   
        @error('image')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    @if(!empty($requirement->image))
    <div><img id="BannerPreview" src="{{asset($requirement->image)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>

</div>
<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('mobile_image') ? 'has-error' : ''}}">
        <label>{{ 'Mobile Image' }}</label>
        <input name="mobile_image" value="{{ $requirement->mobile_image ?? old('mobile_image')}}"  type="file" class=" @error('mobile_image') is-invalid @enderror form-control">
                                                
        @error('mobile_image')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  
    @if(!empty($requirement->mobile_image))
    <div><img id="mobileBannerPreview" src="{{asset($requirement->mobile_image)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
    @endif
</div>
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label>{{ 'Description' }}</label>
                <textarea placeholder="Enter Description" name="description"  type="text" class=" @error('description') is-invalid @enderror form-control">{{ $achievement->description ?? old('description')}}</textarea>
                                                
                @error('description')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
        <div class="form-group {{ $errors->has('sequence') ? 'has-error' : ''}}">
            <label>{{ 'Sequence' }}</label>
                <input placeholder="Enter Sequence" name="sequence" value="{{ $requirement->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                
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
                <option value="">Select Member Status</option> 
                      @if(!empty($member_status))
                    
                       @foreach($member_status as $k=>$item)
                            <option value="{{$k}}" {{isset($requirementnt) && $k = $requirement->member_status?"selected":""}}>{{$item}}</option> 
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
                            <option value="{{$k}}" {{isset($requirement) && $k = $requirement->status?"selected":""}}>{{$item}}</option> 
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

