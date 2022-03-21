@extends('user::layouts.master')

@section('content')
    <!--Page header-->
    @include('ess::attendnaces.partials.page_header')
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="countdowntimer mt-0">
                        <span id="clocktimer2" class="border-0"></span>
                        <label class="form-label">Current Time</label>
                    </div>
                    <div class="btn-list text-center mt-5">

                        <button class="btn ripple btn-primary clicking-in" data-bs-toggle="modal"
                            data-bs-target="#clockinmodal">
                            @lang('app.Clock In')
                        </button>

                        <button class="btn ripple btn-primary clicking-out" data-bs-toggle="modal"
                            data-bs-target="#clockoutmodal">
                            @lang('app.Clock Out')
                        </button>
                        {{-- <a href="#" class="btn ripple btn-primary">Clock Out</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Days Overview This Month</h4>
                </div>
                <div class="card-body pt-0 pb-3">
                    <div class="row mb-0 pb-0">
                        <div class="col-md-6 col-xl-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-primary-transparent">31</span>
                            <h5 class="mb-0 mt-3">Total Working Days</h5>
                        </div>
                        <div class="col-md-6 col-xl-2 text-center py-5 ">
                            <span class="avatar avatar-md bradius fs-20 bg-success-transparent">24</span>
                            <h5 class="mb-0 mt-3">Present Days</h5>
                        </div>
                        <div class="col-md-6 col-xl-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-danger-transparent">2</span>
                            <h5 class="mb-0 mt-3">Absent Days</h5>
                        </div>
                        <div class="col-md-6 col-xl-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-warning-transparent">0</span>
                            <h5 class="mb-0 mt-3">Half Days</h5>
                        </div>
                        <div class="col-md-6 col-xl-2 text-center py-5 ">
                            <span class="avatar avatar-md bradius fs-20 bg-orange-transparent">2</span>
                            <h5 class="mb-0 mt-3">Late Days</h5>
                        </div>
                        <div class="col-md-6 col-xl-2 text-center py-5">
                            <span class="avatar avatar-md bradius fs-20 bg-pink-transparent">5</span>
                            <h5 class="mb-0 mt-3">Holidays</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

    <!-- Row -->
    @include('ess::attendnaces.partials.attendance_overview')
    <!-- End Row-->

    <!--Clock-IN Modal -->
    @include('ess::attendnaces.partials.clock_in_modal')
    <!-- End Clock-IN Modal  -->

    <!--Clock-Out Modal -->
    @include('ess::attendnaces.partials.clock_out_modal')
    <!-- End Clock-Out Modal  -->

@endsection

<!--js -->
@include('ess::attendnaces.partials.js')
<!-- End js  -->
