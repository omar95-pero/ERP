@extends('user::layouts.master')
@section('content')
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Roles</h4>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newadminmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Role</a>
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-->
						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive superadmins-table">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="superadmin-list">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#NO</th>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Register Date</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
                                                @foreach($roles as $index => $role)
													<tr>
														<td>#{{$index+1}}</td>
														<td>
															<a href="#" class="d-flex">
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$role['name']}}</h6>
																</div>
															</a>
														</td>
														<td>{{$role->created_at->format('Y-m-d')}}</td>
														<td class="text-center">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal" data-role="{{ $role }}">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
                                                                <form action="{{url('/admin/roles/' . $role->id)}}" method="POST">
                                                                    {{ method_field('DELETE') }} {!! csrf_field() !!}
                                                                    <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete Role ?')" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top"><i class="feather feather-trash-2 text-danger"></i></button>
                                                                </form>
                                                            </div>
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

					</div>
				</div><!-- end app-content-->
			</div>


			<!--New Role Modal -->
			<div class="modal fade"  id="newadminmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Role</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
                        <form method="post" action="{{url('admin/roles')}}">
                            @csrf
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="">
							</div>
                            <div class="form-group">
                                @foreach($permissions as $permission)
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="permission[]" value="{{$permission['name']}}" checked>
                                <span class="custom-control-label">{{$permission['name']}}</span>
                            </label>
                                @endforeach
                            </div>

						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
                        </form>
					</div>
				</div>
			</div>
			<!-- New Role Modal  -->

			<!--Edit Role Modal -->
			<div class="modal fade"  id="editadminmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Role</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
                        <form method="post" action="{{url('admin/role/update')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="role_id" name="role_id">
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input id="role_name" type="text" name="name" class="form-control" placeholder="Name" value="">
							</div>
                            <div class="form-group">
                                @foreach($permissions as $permission)
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="permission[]" id="permission{{$permission['id']}}" value="{{$permission['name']}}">
                                        <span class="custom-control-label">{{$permission['name']}}</span>
                                    </label>
                                @endforeach
                            </div>

						</div>

						<div class="modal-footer">
							<a href="#" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-success">Update</button>
						</div>
                        </form>
					</div>
				</div>
			</div>
			<!-- Edit Role Modal  -->

		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

			</body>
</html>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#editadminmodal').on('show.bs.modal', function (e) {
                let role = $(e.relatedTarget).data('role');
                $("#role_id").val(role.id);
                $("#role_name").val(role.name);
                $.ajax({
                    url: "{{url('admin/roles/{id}/edit')}}",
                    data: { id: role['id'] },
                    type: 'get',
                    success: function (response) {
                        response.forEach(element => $('#permission'+element).prop('checked', true));

                    }
                });
            });
        });
    </script>
@endsection
