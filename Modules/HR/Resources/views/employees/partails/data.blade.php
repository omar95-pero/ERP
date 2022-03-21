<!-- Row-->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class="mt-0 text-start"> <span class="font-weight-semibold">Total Employees</span>
                            <h3 class="mb-0 mt-1 text-success">{{$countOfEmployees->countEmployee()}}</h3>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="icon1 bg-success-transparent my-auto  float-end"> <i class="las la-users"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class="mt-0 text-start"> <span class="font-weight-semibold">Total Male Employees</span>
                            <h3 class="mb-0 mt-1 text-primary">{{$countOfEmployees->countEmployee("male")}}</h3>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="icon1 bg-primary-transparent my-auto  float-end"> <i class="las la-male"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class="mt-0 text-start"> <span class="font-weight-semibold">Total Female Employees</span>
                            <h3 class="mb-0 mt-1 text-secondary">{{$countOfEmployees->countEmployee("female")}}</h3> </div>
                    </div>
                    <div class="col-5">
                        <div class="icon1 bg-secondary-transparent my-auto  float-end"> <i class="las la-female"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End Row -->

<!-- Row -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Employees List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom datatable" id="hr-table">
                        <thead>
                        <tr>
                            <th class="border-bottom-0 w-5">No</th>
                            <th class="border-bottom-0">Emp Name</th>
                            <th class="border-bottom-0 w-10">#Emp ID</th>
                            <th class="border-bottom-0">Department</th>
                            <th class="border-bottom-0">Job Title</th>
                            <th class="border-bottom-0">Phone Number</th>
                            <th class="border-bottom-0">Join Date</th>
                            <th class="border-bottom-0">At work</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $key=>$employee)
                             <tr>
                            <td>#{{$key<9 ? '0'.++$key:++$key}}</td>
                            <td>
                                <div class="d-flex">
                                    <span class="avatar  brround me-3" style="background-image:url('{{GetImg($employee->user->image,'users')}}')"></span>
                                    <div class="me-3 mt-0 mt-sm-1 d-block">
                                        <h6 class="mb-1 fs-14">{{$employee->user->name}}</h6>
                                        <p class="text-muted mb-0 fs-12">{{$employee->user->email}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>#{{$employee->emp_code}}</td>
                            <td>{{$employee->department->name}}</td>
                            <td>{{$employee->jobTitle->title}}</td>
                            <td>{{$employee->user->phone}}</td>
                            <td>{{$employee->date_of_join}}</td>
                            <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($employee->date_of_join))->diffForHumans()}}</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>
                                <a class="btn btn-primary btn-icon btn-sm"  href="{{route('employees.edit',$employee->user->id)}}">
                                    <i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
                                </a>
                                <form action="{{route('employees.destroy',$employee->user->id)}}" method="POST" id="form.{{$employee->id}}" style="display: inline-flex">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-danger btn-icon btn-sm deleteBtn" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
                                </form>
{{--                                <a class="btn btn-danger btn-icon btn-sm deleteBtn" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>--}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->
