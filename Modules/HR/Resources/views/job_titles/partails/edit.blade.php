{{--<div class="modal fade"  id="editdepartmentmodal">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
            <div class="modal-header">
                <h5 class="modal-title">{{trans('branshes.Edit Branch')}}</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form  method="POST" action="{{route('job-titles.update',$jobTitle->id)}}">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">{{trans('branshes.Edit Job Title')}}</label>
                        <input name="title" type="text" class="form-control editBranch"  id="" placeholder="Job Title" value="{{$jobTitle->title}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
