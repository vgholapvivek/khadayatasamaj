<div class="row">
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label>{{ 'Name' }}</label>
                    <input placeholder="Enter Name" name="name" value="{{ $blog->title ?? old('title')}}"  type="text" class=" @error('title') is-invalid @enderror form-control">
                                                    
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
            <input name="image" value="{{ $blog->image ?? old('image')}}"  type="file" class=" @error('image') is-invalid @enderror form-control">
                                                    
            @error('image')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if(!empty($blog->image))
        <div><img id="BannerPreview" src="{{asset($blog->image)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('mobile_image') ? 'has-error' : ''}}">
            <label>{{ 'Mobile Image' }}</label>
            <input name="mobile_image" value="{{ $blog->mobile_image ?? old('mobile_image')}}"  type="file" class=" @error('mobile_image') is-invalid @enderror form-control">
                                                    
            @error('mobile_image')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        @if(!empty($blog->mobile_image))
        <div><img id="mobileBannerPreview" src="{{asset($blog->mobile_image)}}" alt="Mobile Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <label>{{ 'Description' }}</label>
                    <textarea placeholder="Enter Description" name="description"  type="text" class=" @error('description') is-invalid @enderror form-control">{{ $blog->description ?? old('description')}}</textarea>
                                                    
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
                <input placeholder="Enter Sequence" name="sequence" value="{{ $blog->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                
                @error('sequence')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('show_in_homepage') ? 'has-error' : ''}}">
                <label>{{ 'Shown In Homepage' }}</label>
                <input name="show_in_homepage" value="1" {{ @$blog->show_in_homepage ? 'checked' : '' }} type="checkbox" class="@error('show_in_homepage') is-invalid @enderror form-control">                                

                    @error('show_in_homepage')  
                        <div class="invalid-feedback">{{ $message }}</div>
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
                                    <option value="{{$k}}" {{isset($blog) && $k = $blog->status?"selected":""}}>{{$item}}</option> 
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

