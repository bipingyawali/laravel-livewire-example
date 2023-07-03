<div class="card">
    <div class="card-header">General Information</div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Company Name</label>
                <input wire:model="form.company_name" type="text" class="form-control" placeholder="Enter Company Name">
                @error('form.company_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input wire:model="form.first_name" type="text" class="form-control" placeholder="Enter First Name">
                @error('form.first_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input wire:model="form.last_name" type="text" class="form-control" placeholder="Enter Last Name">
                @error('form.last_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Phone Number</label>
                <input wire:model="form.phone_number" type="text" class="form-control" placeholder="Enter Phone Number">
                @error('form.phone_number')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">Address Information</div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>House Number</label>
                <input wire:model="form.house_number" type="text" class="form-control" placeholder="Enter House Number">
                @error('form.house_number')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Street</label>
                <input wire:model="form.street" type="text" class="form-control" placeholder="Enter Street">
                @error('form.street')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Town</label>
                <input wire:model="form.town" type="text" class="form-control" placeholder="Enter Town">
                @error('form.town')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>County</label>
                <input wire:model="form.county" type="text" class="form-control" placeholder="Enter Country">
                @error('form.county')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Postcode</label>
                <input wire:model="form.postcode" type="text" class="form-control" placeholder="Enter Postcode">
                @error('form.postcode')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Country</label>
                <input wire:model="form.country" type="text" class="form-control" placeholder="Enter Country">
                @error('form.country')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Latitude</label>
                <input wire:model="form.latitude" type="text" class="form-control" placeholder="Enter Latitude">
                @error('form.latitude')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Longitude</label>
                <input wire:model="form.longitude" type="text" class="form-control" placeholder="Enter Longitude">
                @error('form.longitude')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary btn-submit">Submit</button>
