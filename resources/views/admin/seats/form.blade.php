<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('row_number') ? 'has-error' : ''}}">
            <label>{{ 'Row Number' }}</label>
                <input placeholder="Enter row number" name="row_number" value="{{ $seat->row_number ?? old('row_number')}}"  type="text" class=" @error('row_number') is-invalid @enderror form-control"  >
                                                
                @error('row_number')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('seat_number') ? 'has-error' : ''}}">
            <label>{{ 'Sear Number' }}</label>
                <input placeholder="Enter seat number" name="seat_number" value="{{ $seat->seat_number ?? old('seat_number')}}"  type="text" class=" @error('seat_number') is-invalid @enderror form-control"  >
                                                
                @error('seat_number')  
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
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

<div class="row">

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

</div>


