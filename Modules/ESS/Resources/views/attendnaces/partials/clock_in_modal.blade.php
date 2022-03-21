<div class="modal fade" id="clockinmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><span class="feather feather-clock  me-1"></span>Clock In</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="countdowntimer" style="text-align:center;">
                    <span class="border-0 clocktimer"></span>
                    <label class="form-label">Current Time</label>
                </div>

                <div class="form-group">
                    <label class="form-label">Working Form</label>
                    <select name="projects" class="form-control custom-select" data-placeholder="Select">
                        <option label="Select"></option>
                        <option value="1">Office</option>
                        <option value="2">Home</option>
                        <option value="3">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Note:</label>
                    <textarea class="form-control" rows="3" name='notes' placeholder="notes .... "></textarea>
                </div>

                <div class="form-group" style="color:red;" id="clickErorrs">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="submitClockin">Clock In</button>
            </div>
        </div>
    </div>
</div>
