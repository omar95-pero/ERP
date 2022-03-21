@extends('user::layouts.master')
@section('content')
    <div>
    <!--/app header-->

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">{{trans('company.Job Titles')}}</h4>
        </div>
        <div class="page-rightheader ms-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#adddepartmentmodal">{{trans('company.Add Job Titles')}}</a>
                    <button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    @include('hr::job_titles.partails.data')
    <!-- End Row-->

        <!--Add Department Modal -->
      @include('hr::job_titles.partails.create')
        <!-- End Add Department Modal  -->

        <!--Edit Department Modal -->
{{--      @include('company::branches.partails.edit')--}}
        <div class="modal fade"  id="editdepartmentmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modalBody">
                </div>
            </div>
        </div>



        <!-- End Edit Department Modal  -->


    </div><!-- end app-content-->
@endsection
@section('scripts')
    @include('hr::job_titles.partails.js')

@endsection
