@extends('user::layouts.master')

@section('css')
    <link href="{{ asset('') }}assets/plugins/select2/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/multipleselect/multiple-select.css">
@endsection
@section('content')
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Users</h4>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newadminmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New User</a>
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
														<th class="border-bottom-0">email</th>
														<th class="border-bottom-0">Register Date</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
                                                @foreach($users as $index => $user)
													<tr>
														<td>#{{$index+1}}</td>
														<td>
															<a href="#" class="d-flex">
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$user['name']}}</h6>
																</div>
															</a>
														</td>
                                                        <td>{{$user['email']}}</td>
														<td>{{$user->created_at->format('Y-m-d')}}</td>
														<td class="text-center">
															<div class="d-flex">
																<a href="#" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal" data-user="{{ $user }}">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
                                                                <form action="{{url('/admin/users/' . $user->id)}}" method="POST">
                                                                    {{ method_field('DELETE') }} {!! csrf_field() !!}
                                                                    <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete User ?')" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top"><i class="feather feather-trash-2 text-danger"></i></button>
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
							<h5 class="modal-title">Add New User</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
                        <form method="post" action="{{url('admin/users')}}">
                            @csrf
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="">
							</div>

                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password" value="">
                            </div>

                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control select2" name="role">
                                    <option selected disabled>Select Role</option>
                                    @foreach($viewModel->roles() as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Branches</label>
                                <select name="branch_ids[]" multiple="multiple" class="multi-select" style="display: none;">
                                    <option selected disabled>Select Branch</option>
                                    @foreach($viewModel->branches() as $branch)
                                    <option value="{{$branch['id']}}">{{$branch['name']}}</option>
                                    @endforeach
                                </select>
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
							<h5 class="modal-title">Edit User</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
                        <form method="post" action="{{url('admin/user/update')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="user_id" name="user_id">
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input id="user_name" type="text" name="name" class="form-control" placeholder="Name" value="">
							</div>

                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input id="user_email" type="text" name="email" class="form-control" placeholder="Email" value="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input id="user_password" type="password" name="password" class="form-control" placeholder="password" value="">
                            </div>

                            <div class="form-group role_selection">
                                <label>Role</label>
                                <select class="form-control select2" name="role">
                                    @foreach($viewModel->roles() as $role)
                                        <option id="role{{$role['id']}}" value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group branch_selection">
                                <label class="form-label">Branches</label>
                                <select name="branch_ids[]" multiple="multiple" class="multi-select" style="display: none;">
                                    @foreach($viewModel->branches() as $branch)
                                        <option id="branch{{$branch['id']}}" value="{{$branch['id']}}">{{$branch['name']}}</option>
                                    @endforeach
                                </select>
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
    <!-- Select2 js -->
    <script src="{{ asset('') }}assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="{{ asset('') }}assets/plugins/multipleselect/multi-select.js"></script>
    <script>
        $(document).ready(function() {
            $('#editadminmodal').on('show.bs.modal', function (e) {
                let user = $(e.relatedTarget).data('user');
                $("#user_id").val(user.id);
                $("#user_name").val(user.name);
                $("#user_email").val(user.email);
                $.ajax({
                    url: "{{url('admin/users/{id}/edit')}}",
                    data: { id: user['id'] },
                    type: 'get',
                    success: function (response) {
                        console.log(response['roles'])
                        console.log(response['branches'])
                        response['roles'].forEach(element => $("div.role_selection select").val(element).change());
                        // response['branches'].forEach(element1 => $('div.branch_selection option[value=' + element1 + ']').attr('selected', true));
                        // response['branches'].forEach(element => $("div.branch_selection select").val(element).att());
                    }
                });
            });
        });
    </script>
@endsection
