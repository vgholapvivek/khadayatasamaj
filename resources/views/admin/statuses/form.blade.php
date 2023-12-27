<div class="row">
<div class="col-sm-6">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <label>{{ 'Name' }}</label>
            <input placeholder="Enter Name" name="name" value="{{ $status->name ?? old('name')}}"  type="text" class=" @error('name') is-invalid @enderror form-control"  >
                                               
            @error('name')  
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
        <label>{{ 'Status' }}</label>
            <select name="status" class="form-control   @error('status') is-invalid @enderror ">
                <option value="1" {{isset($status->status) && $status->status == 1 ?? 'selected'}}>Active </option>
                    <option value="0" {{isset($status->status) && $status->status == 0 ?? 'selected'}}>InActive </option>            
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

    <div class="col-md-6">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
        </div>
    </div>
</div>


