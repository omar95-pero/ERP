{{--<div class="modal fade"  id="editdepartmentmodal">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
            <div class="modal-header">
                <h5 class="modal-title">{{trans('branshes.Edit Branch')}}</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form  method="POST" action="{{route('branches.update',$branch->id)}}">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">{{trans('branshes.Edit Branch')}}</label>
                        <input name="name" type="text" class="form-control editBranch"  id="" placeholder="Branch Name" value="{{$branch->name}}">
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
