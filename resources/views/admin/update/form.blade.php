<div class="row">
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                <label>{{ 'Title' }}</label>
                    <input placeholder="Enter Title" name="title" value="{{ $event->title ?? old('title')}}"  type="text" class=" @error('title') is-invalid @enderror form-control">
                                                    
                    @error('title')  
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
            </div>
    </div>    
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('event_image') ? 'has-error' : ''}}">
            <label>{{ 'Event Image' }}</label>
            <input name="event_image[]" multiple value="{{ $event->event_image ?? old('event_image')}}"  type="file" class=" @error('event_image') is-invalid @enderror form-control">
                                                    
            @error('event_image')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if(!empty($event->event_image))
        <div><img id="BannerPreview" src="{{asset($event->event_image)}}" alt="Banner Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('mobile_event_image') ? 'has-error' : ''}}">
            <label>{{ 'Mobile Event Image' }}</label>
            <input name="mobile_event_image[]" multiple value="{{ $event->mobile_event_image ?? old('mobile_event_image')}}"  type="file" class=" @error('mobile_event_image') is-invalid @enderror form-control">
                                                    
            @error('mobile_event_image')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        @if(!empty($event->mobile_event_image))
        <div><img id="mobileBannerPreview" src="{{asset($event->mobile_event_image)}}" alt="Mobile Preview" style="max-width: 50%; max-height: 200px; margin-top: 10px;"></div>
        @endif
    </div>

    
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('venue') ? 'has-error' : ''}}">
            <label>{{ 'Venue' }}</label>
                <input placeholder="Enter Venue" name="venue" value="{{ $event->venue?? old('venue')}}"  type="text" class=" @error('venue') is-invalid @enderror form-control">
                                                
                @error('venue')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
            <label>{{ 'Detail' }}</label>
                <input placeholder="Enter Detail" name="details" value="{{ $event->details?? old('details')}}"  type="text" class=" @error('details') is-invalid @enderror form-control">
                                                
                @error('details')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                <label>{{ 'Date' }}</label>
                    <input placeholder="Enter Date" name="date" value="{{ $event->date?? old('date')}}"  type="text" id="datepicker" class=" @error('date') is-invalid @enderror form-control">                                
                    @error('description')  
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
            </div>
    </div> 
    <div class="col-sm-6">
            <div class="form-group {{ $errors->has('total_person_in_event') ? 'has-error' : ''}}">
                <label>{{ 'Total People In Event' }}</label>
                    <input placeholder="Enter Total People In Event" name="total_person_in_event" value="{{ $event->total_person_in_event?? old('total_person_in_event')}}"  type="text" class=" @error('total_person_in_event') is-invalid @enderror form-control">                                
                    @error('total_person_in_event')  
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
                    <input  name="show_in_homepage" value="1" {{ @$event->show_in_homepage ? 'checked' : '' }}  type="checkbox" class=" @error('show_in_homepage') is-invalid @enderror form-control">                                
                    @error('description')  
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
            </div>
        </div> 

        <div class="col-sm-6">
                <div class="form-group {{ $errors->has('vip_guest_name') ? 'has-error' : ''}}">
                    <label>{{ 'Vip Guest Name' }}</label>
                        <input placeholder="Enter Vip Guest Name" name="vip_guest_name" value="{{ $event->vip_guest_name ?? old('vip_guest_name')}}"  type="text" class=" @error('vip_guest_name') is-invalid @enderror form-control">
                                                        
                        @error('vip_guest_name')  
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
                        <input placeholder="Enter Sequence" name="sequence" value="{{ $event->sequence ?? old('sequence')}}"  type="text" class=" @error('sequence') is-invalid @enderror form-control">
                                                        
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
                                    <option value="{{$k}}" {{isset($event) && $k = $event->status?"selected":""}}>{{$item}}</option> 
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

