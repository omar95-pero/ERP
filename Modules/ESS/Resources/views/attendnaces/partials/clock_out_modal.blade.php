<div class="modal fade" id="clockoutmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><span class="feather feather-clock  me-1"></span>@lang('app.Clock Out')
                </h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="countdowntimer" style="text-align:center;">
                    <span class="border-0 clocktimer"></span>
                    <label class="form-label">@lang('app.Current Time')</label>
                </div>

                <div>
                    <h3 style="text-align:center;">
                        @lang('app.Are you sure to check out ?!')
                    </h3>
                </div>

                <div class="form-group" style="color:red;" id="clickoutErorrs">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-outline-primary" data-bs-dismiss="modal">@lang('app.Close')</button>
                <button class="btn btn-primary" id="submitClockout">@lang('app.Clock Out')</button>
            </div>
        </div>
    </div>
</div>
