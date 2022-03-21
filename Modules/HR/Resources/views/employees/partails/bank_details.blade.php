<div class="tab-pane" id="tab7">
    <div class="card-body">
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Account Holder</label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control"  placeholder="Name" value="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Account Number</label>
                </div>
                <div class="col-md-9">
                    <input type="number" name="account_number" class="form-control"  placeholder="Number" value="{{$employee->account_number??old('account_number')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Bank Name</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="bank_name" class="form-control"  placeholder="Name" value="{{$employee->bank_name??old('bank_name')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Branch Location</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="bank_location" class="form-control"  placeholder="Location" value="{{$employee->bank_location??old('bank_location')}}">
                </div>
            </div>
        </div>
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Bank Code (IFSC)--}}
{{--                        <span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Identify Number in your Country">?</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control"  placeholder="Code" value="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Tax Payer ID (PAN)--}}
{{--                        <span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Taxpayer Identification Number Used in your Country">?</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control"  placeholder="ID No">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
