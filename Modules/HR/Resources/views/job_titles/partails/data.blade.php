<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">{{trans('company.Job Title')}}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-nowrap table-bordered border-bottom datatable" id="hr-table">
                        <thead>
                        <tr>
                            <th class="border-bottom-0 w-5">#ID</th>
                            <th class="border-bottom-0">{{trans('company.Job Title')}}</th>
                            <th class="border-bottom-0">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($viewModel as $key=>$jobTitle)
                        <tr>
                            <td>#{{$key<9 ? '0'.++$key:++$key}}</td>
                            <td>{{$jobTitle->title}}</td>
                            <td>
{{--                                data-bs-toggle="modal" data-bs-target="#editdepartmentmodal "--}}
                                <a class="btn btn-primary btn-icon btn-sm editJobTitle" data-bs-toggle="modal" data-bs-target="#editdepartmentmodal " job_title_id="{{$jobTitle->id}}">
                                    <i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
                                </a>
                                <form action="{{route('job-titles.destroy',$jobTitle->id)}}" method="POST" id="form.{{$jobTitle->id}}" style="display: inline-flex">
                                     @csrf
                                    @method('delete')
                                    <a class="btn btn-danger btn-icon btn-sm deleteBtn" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2" ></i></a>
                                </form>
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
