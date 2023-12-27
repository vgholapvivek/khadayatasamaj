<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label>{{ 'Event Title' }}</label>
            <input placeholder="Enter event title" name="title" value="{{ $event->title ?? old('title')}}"  type="text" class=" @error('title') is-invalid @enderror form-control"  required>
                                               
            @error('title')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('venue') ? 'has-error' : ''}}">
        <label>{{ 'Venue' }}</label>
            <input placeholder="Enter event venue" name="venue" value="{{ $event->venue ?? old('venue')}}"  type="text" class=" @error('venue') is-invalid @enderror form-control"  required>
                                               
            @error('venue')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
        <label>{{ 'Event Details' }}</label>
        <textarea placeholder="Enter details" name="details"  class=" @error('details') is-invalid @enderror form-control" required>{{ $event->details ?? old('address')}}</textarea>                                  
        
        @error('details')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('desciption') ? 'has-error' : ''}}">
        <label>{{ 'Event Description' }}</label>
        <textarea placeholder="Enter desciption" name="desciption"  class=" @error('desciption') is-invalid @enderror form-control" required>{{ $event->desciption ?? old('desciption')}}</textarea>                                  
        
        @error('desciption')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
        <label>{{ 'Upload Images' }} (JPG or PNG):</label>
        <input name="images[]" type="file" class=" @error('images') is-invalid @enderror form-control"  required accept="image/jpeg, image/png" multiple>                               
        
        @error('desciption')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        @if($event->images)
            <br>
            <div class="productImgBox">
                @foreach($event->images as $image)
                    <div class="productImg imageDivI{{$image->id}}">
                        <span class="deleteImage" data-id="{{$image->id}}" data-value="image">&#10060;</span>
                        <img src="{{asset($image->image)}}" height="100" width="100">
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="form-group {{ $errors->has('max_ticket_book') ? 'has-error' : ''}}">
        <label>{{ 'Maximum number of ticket user can book' }}</label>
        <input placeholder="Enter count" name="max_ticket_book" value="{{ $event->max_ticket_book ?? old('max_ticket_book')}}"  type="text" class=" @error('max_ticket_book') is-invalid @enderror form-control"  required>
                                               
        @error('max_ticket_book')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('ticket_price') ? 'has-error' : ''}}">
        <label>{{ 'Ticket Price' }}</label>
        <input placeholder="Enter 1 ticket price" name="ticket_price" value="{{ $event->ticket_price ?? old('ticket_price')}}"  type="text" class=" @error('ticket_price') is-invalid @enderror form-control"  required>
                                               
        @error('ticket_price')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
        <label>{{ 'Event Date' }}</label>
        <input placeholder="Event Date" name="date" value="{{ $event->date ?? old('date')}}"  type="date" class=" @error('date') is-invalid @enderror form-control"  required>
                                               
        @error('date')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
        <label>{{ 'Event Time' }}</label>
        <input placeholder="Event Time" name="time" value="{{ $event->time ?? old('time')}}"  type="time" class=" @error('time') is-invalid @enderror form-control"  required>
                                               
        @error('time')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
        <label>{{ 'Event Status' }}</label>
        <select name="status" class="form-control">
            <option value="1" {{ isset($event->status) && $event->status == 1 ?? 'selected'}}>Active</option>
            <option value="0" {{ isset($event->status) && $event->status == 0 ?? 'selected'}}>Inactive</option>
        </select>
                                               
        @error('status')  
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


