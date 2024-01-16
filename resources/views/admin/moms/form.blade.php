<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
        <label>{{ 'MOM Date' }}</label>
            <input name="date" value="{{ $mom->date ?? old('date')}}"  type="date" class=" @error('date') is-invalid @enderror form-control"  required>
                                               
            @error('date')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="form-group {{ $errors->has('mom_details') ? 'has-error' : ''}}">
        <label>{{ 'Meeting Details' }}</label>
            <textarea name="mom_details" class=" @error('mom_details') is-invalid @enderror form-control" required> {{ $mom->mom_details ?? old('mom_details')}}</textarea>                          
            @error('mom_details')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
        <label>{{ 'MOM Document' }}</label>
            <input name="file" type="file" class=" @error('file') is-invalid @enderror form-control" >                       
            @error('file')  
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @if(!empty($mom->file))
                <div>
                    <a href="{{asset($mom->file)}}" target="_blank">View/Download</a>
                </div>
            @endif
    </div>
    

    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
        <label>{{ 'Status' }}</label>
        <select class="form-control" name="status" required>
            <option value="1" {{isset($mom->mom_details) && $mom->mom_details = 1 ? "selected" : "" }}>Active</option> 
            <option value="0" {{isset($mom->mom_details) && $mom->mom_details = 0 ? "selected" : "" }}>Active</option> 
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


