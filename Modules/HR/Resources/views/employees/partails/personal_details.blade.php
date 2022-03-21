<div class="tab-pane active" id="tab5">
    <div class="card-body">
        <h4 class="mb-4 font-weight-bold">Basic</h4>
        <div class="form-group ">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">User Name</label>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label mb-0 mt-2" for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control mb-md-0 mb-5" id="first_name"  placeholder="First Name" value="{{isset($employee)?strchr($employee->user->name, '-', true):old('first_name')}}">
                            <span class="text-muted"></span>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-0 mt-2" for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="{{isset($employee)?substr(strchr($employee->user->name, '-'),1):old('last_name')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2" for="phone">Contact Number</label>
                </div>
                <div class="col-md-9">
                    <input type="tel" name="phone" class="form-control" id="phone"  placeholder="Phone Number" value="{{isset($employee)?$employee->user->phone:old('phone')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2" for="emergency_phone">Emergency Contact Number</label>
                </div>
                <div class="col-md-9">
                    <input type="tel" name="emergency_phone" id="emergency_phone" class="form-control"  placeholder="Contact Number01" value="{{isset($employee)?$employee->emergency_phone:old('emergency_phone')}}">
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2" for="date_of_birth">Date Of Birth</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="date_of_birth" class="form-control fc-datepicker" id="date_of_birth"  placeholder="DD-MM-YYY" value="{{isset($employee)?$employee->date_of_birth:old('date_of_birth')}}" >
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="">Gender</label>
                </div>
                <div class="col-md-9">
                    <div class="custom-controls-stacked d-md-flex" >
                        <label class="custom-control custom-radio me-4" >
                            <input type="radio" class="custom-control-input" name="gender" value="male"@if(isset($employee) && $employee->gender=='male'){{'checked'}}@endif checked>
                            <span class="custom-control-label">Male</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="gender" value="female"@if(isset($employee) && $employee->gender=='female'){{'checked'}}@endif>
                            <span class="custom-control-label">Female</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2" for="email">Email</label>
                </div>
                <div class="col-md-9">
                    <input type="email" name="personal_email" class="form-control" id="email"  placeholder="email" value="{{$employee->personal_email??old('personal_email')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Present Address</label>
                </div>
                <div class="col-md-9">
                    <textarea rows="3" name="address" class="form-control" placeholder="Address1">{{$employee->address??old('address')}}</textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-label mb-0 mt-2">Upload Photo</div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="form-label" class="form-label"></label>
{{--                        {{dd(public_path('\\uploads'.'\\'.'users' . '\\' . $employee->user->image))}}--}}
                        <input class="form-control dropify" type="file" name="image" data-default-file="@if(isset($employee)){{GetImg($employee->user->image,'users')??old('image')}}@endif">
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mb-5 mt-7 font-weight-bold">Account Login</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Employee Email</label>
                </div>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control"  placeholder="employee email" value="{{$employee->user->email??old('email')}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mb-0 mt-2">Password</label>
                </div>
                <div class="col-md-9">
                    <input type="password" name="password" class="form-control"  placeholder="password" value="">
                </div>
            </div>
        </div>
        <div class="form-group mt-7">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label">Email Notification:</label>
                </div>
                <div class="col-md-9">
                    <label class="custom-switch">
                        <input type="checkbox" name="email_status" class="custom-switch-input" value="1"@if(isset($employee) && $employee->email_status==1){{'checked'}}@endif>
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">On/Off</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
