<div class="tab-pane" id="tab6">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">{{trans('company.Employee ID')}}</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="emp_code" class="form-control"  placeholder="#ID" value="{{$employee->emp_code??old('emp_code')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Branches</label>
                </div>
                <div class="col-md-9">
                    <select name="branch_id" class="form-control custom-select select2">
                        <option value="" selected disabled>Select Branch</option>
                        @foreach($data->branches() as $branchToChoose)
                            <option value="{{$branchToChoose->id}}" @if(isset($employee) && $employee->branch_id==$branchToChoose->id){{'selected'}}@endif>{{$branchToChoose->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">{{trans('company.Department')}}</label>
                </div>
                <div class="col-md-9">
                    <select name="department_id" class="form-control custom-select select2">
                        <option value="" selected disabled>{{trans('company.Select Department')}}</option>
                        @foreach($data->departments() as $departmentToChoose)
                        <option value="{{$departmentToChoose->id}}" @if(isset($employee) && $employee->department_id==$departmentToChoose->id){{'selected'}}@endif > {{$departmentToChoose->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">{{trans('company.Job Title')}}</label>
                </div>
                <div class="col-md-9">
                    <select name="job_title_id" class="form-control custom-select select2">
                        <option value="" selected disabled>{{trans('company.Select Job Title')}}</option>
                        @foreach($data->jobTitles()  as $titleToChoose)
                        <option value="{{$titleToChoose->id}}" @if(isset($employee) && $employee->job_title_id==$titleToChoose->id){{'selected'}}@endif >{{$titleToChoose->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Date Of Joining</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="date_of_join" class="form-control fc-datepicker"  placeholder="DD-MM-YYYY" value="{{$employee->date_of_join??old('date_of_join')}}">
                </div>
            </div>
        </div>
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Resignation Date</label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control fc-datepicker"  placeholder="DD-MM-YYYY">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Termination Date</label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control fc-datepicker"  placeholder="DD-MM-YYYY">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label mb-0 mt-2">Credit Leaves--}}
{{--                        <span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Unused leaves for the Employee">?</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <input type="text" class="form-control"  placeholder="0">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <h4 class="mb-5 mt-7 font-weight-bold">Salary</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Type</label>
                </div>
                <div class="col-md-9">
                    <select class="form-control custom-select select2" name="job_type">
                        <option value="" selected disabled>Select Job Type</option>
                        <option value="full"  @if(isset($employee) && $employee->job_type=='full'){{'selected'}}@endif >Full-Time</option>
                        <option value="part"@if(isset($employee) && $employee->job_type=='part'){{'selected'}}@endif  >Part-Time</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Salary</label>
                </div>
                <div class="col-md-9">
                    <input type="number" name="salary" class="form-control"  placeholder="$Salary" value="{{$employee->salary??old('salary')}}">
                </div>
            </div>
        </div>
{{--        <div class="form-group mt-7">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <label class="form-label">Status:</label>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <label class="custom-switch">--}}
{{--                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>--}}
{{--                        <span class="custom-switch-indicator"></span>--}}
{{--                        <span class="custom-switch-description">Active/Inactive</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
