<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">@lang('app.Attendance')</h4>
    </div>
    <div class="page-rightheader ms-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
            <div class="d-flex">
                <div class="header-datepicker me-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="feather feather-calendar"></i>
                            </div>
                        </div><input class="form-control fc-datepicker todayDate" type="text" id="todayDate">
                    </div>
                </div>
            </div>
            <div class="d-lg-flex">
                <div class="btn-list">
                    <button class="btn btn-primary me-4 clicking-in" data-bs-toggle="modal"
                        data-bs-target="#clockinmodal">Clock In</button>

                    <button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail">
                        <i class="feather feather-mail"></i> </button>
                    <button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i
                            class="feather feather-phone-call"></i> </button>
                    <button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info">
                        <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>
