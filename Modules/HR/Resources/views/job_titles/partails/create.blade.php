<div class="modal fade"  id="adddepartmentmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> {{trans('branches.Add Job Title')}}</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('job-titles.store')}}" method = "Post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">{{trans('branches.Add Job Title')}}</label>
                        <input type="text" name="title" class="form-control" placeholder="{{trans('branches.Job Title')}}" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
