<div class="row">
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label>{{ 'Name' }}</label>
                    <input placeholder="Enter Name" name="name" value="{{ $testimonial->title ?? old('title')}}"  type="text" class=" @error('title') is-invalid @enderror form-control">
                                                    
                    @error('name')  
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
            </div>
    </div>    
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('') ? 'has-error' : ''}}">
            <label>{{ 'Image' }}</label>
            <input name="testimonial" value="{{ $testimonial->testimonial ?? old('testimonial')}}"  type="file" class=" @error('testimonial') is-invalid @enderror form-control">
                                                    
            @error('image')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if(!empty($testimonial->testimonial))
        <div><img id="BannerPreview" src="{{asset($testimonial->testimonial)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('mobile_testimonial') ? 'has-error' : ''}}">
            <label>{{ 'Mobile Testimonial' }}</label>
            <input name="mobile_testimonial" value="{{ $testimonial->mobile_testimonial ?? old('mobile_testimonial')}}"  type="file" class=" @error('mobile_testimonial') is-invalid @enderror form-control">
                                                    
            @error('mobile_testimonial')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        @if(!empty($testimonial->mobile_testimonial))
        <div><img id="mobileBannerPreview" src="{{asset($testimonial->mobile_testimonial)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <label>{{ 'Description' }}</label>
                    <textarea placeholder="Enter Description" name="description"  type="text" class=" @error('description') is-invalid @enderror form-control">{{ $testimonial->description ?? old('description')}}</textarea>
                                                    
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
        <div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
            <label>{{ 'Designation' }}</label>
                <input placeholder="Enter Designation" name="sequence" value="{{ $testimonial->designation ?? old('designation')}}"  type="text" class=" @error('designation') is-invalid @enderror form-control">
                                                
                @error('designation')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('sequence') ? 'has-error' : ''}}">
            <label>{{ 'Sequence' }}</label>
                <input placeholder="Enter Sequence" name="sequence" value="{{ $testimonial->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                
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
            <div class="form-group {{ $errors->has('show_in_homepage') ? 'has-error' : ''}}">
                <label>{{ 'Shown In Homepage' }}</label>
                    <input  name="show_in_homepage" value="1" {{ @$testimonial->show_in_homepage ? 'checked' : '' }}  type="checkbox" class=" @error('show_in_homepage') is-invalid @enderror form-control">                                
                    @error('description')  
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
                                    <option value="{{$k}}" {{isset($testimonial) && $k = $testimonial->status?"selected":""}}>{{$item}}</option> 
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

