@extends('user::layouts.master')


@section('styles')
    <!-- INTERNAL Pg-calendar-master css -->
    <link href="{{ asset('') }}/assets/plugins/pg-calendar-master/pignose.calendar.css" rel="stylesheet" />
@endsection

@section('content')

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">@lang('app.Apply Leaves')</h4>
        </div>
        <div class="page-rightheader ms-md-auto">
            <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i
                            class="feather feather-mail"></i> </button>
                    <button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i
                            class="feather feather-phone-call"></i> </button>
                    <button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i
                            class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->


    <!-- Row -->
    <div class="row">
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">@lang('app.Apply Leaves')</h4>
                </div>
                <form action="{{ route('apply-leaves.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="leave-types">
                            <div class="form-group">
                                <label class="form-label">@lang('app.Leaves Dates')</label>
                                <select name="leaves_days" class="form-control custom-select select2"
                                    id="daterange-categories">
                                    <option value="1">@lang('app.Single Leaves')</option>
                                    <option value="2">@lang('app.Multiple Leaves')</option>
                                </select>
                            </div>

                            <div class="leave-content active" id="single">
                                <div class="form-group">
                                    <label class="form-label">@lang('app.Date Range:')</label>
                                    <div class="input-group">
                                        <input type="text" name="date_from" class="form-control todayDate"
                                            placeholder="select dates" />

                                    </div>
                                </div>
                            </div>

                            <div class="leave-content" id="multiple">
                                <div class="form-group">
                                    <label class="form-label">@lang('app.Date Range to:')</label>
                                    <div class="input-group">
                                        <input type="text" name="date_to" class="form-control todayDate"
                                            placeholder="select dates" />

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">@lang('app.Leaves Types')</label>
                                <select name="leave_type" class="form-control custom-select select2"
                                    data-placeholder="Select">
                                    <option label="Select"></option>
                                    <option value="1">Ordinary Vacation</option>

                                    <option value="2">Casual Leaves</option>
                                    <option value="3">Sick Leaves</option>
                                    <option value="4">Other Leaves</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">@lang('app.Reason:')</label>
                                <textarea class="form-control" rows="2" name="reason"
                                    placeholder="{{ __('app.leave reason .. ') }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">@lang('app.Attachment: (If Existing)')</label>
                                <input type="file" name="leave_attachment" id="leaveAttachment">
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex">
                            <div>
                                <label class="mb-0 font-weight-semibold text-dark">Selected Days:</label>
                                <span class="badge badge-danger badge-pill ms-2">2</span>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="btn btn-outline-primary">Close</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card">
                <div class="p-0">
                    <div class="card-header border-0">
                        <h4 class="card-title">Calendar</h4>
                    </div>
                    <div class="leave-calendar mt-3"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header  border-0">
                    <h4 class="card-title">Leaves Overview</h4>
                </div>
                <div class="card-body">
                    <div id="leavesoverview" class="mx-auto pt-2"></div>
                    <div class="row pt-4 mx-auto text-center">
                        <div class="col-lg-9 col-md-12 mx-auto d-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex font-weight-semibold">
                                        <span class="dot-label bg-primary me-2 my-auto"></span>Casual Leaves
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <div class="d-flex font-weight-semibold">
                                        <span class="dot-label badge-danger me-2 my-auto"></span>Sick Leaves
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="d-flex font-weight-semibold">
                                        <span class="dot-label bg-secondary me-2 my-auto"></span>Gifted Leaves
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="d-flex font-weight-semibold">
                                        <span class="dot-label bg-success me-2 my-auto"></span>Remaining Leaves
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

@endsection
{{-- //todayDate --}}
@section('scripts')
    <!-- INTERNAL Pg-calendar-master js -->
    <script src="{{ asset('') }}/assets/plugins/pg-calendar-master/pignose.calendar.full.min.js"></script>

    <script>
        $(function() {
            // calendar
            $('.leave-calendar').pignoseCalendar({
                theme: 'blue', // light, dark, blue
                disabledWeekdays: [5, 6],

            });

            // leave dates
            $('#daterange-categories').on('change', function() {
                console.log($(this).val());
                if ($(this).val() == 2 /*multi days*/ ) {
                    console.log('multi days');
                    // show day_to input field
                    $('#multiple').addClass('active');
                } else {
                    // if day_to input field shown >>> hide it
                    if ($("#multiple").hasClass("active")) {
                        $('#multiple').removeClass('active');
                    }

                }
            });
        });
    </script>
@endsection
