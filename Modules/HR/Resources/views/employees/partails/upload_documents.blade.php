<div class="tab-pane" id="tab8">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-label mb-0 mt-2">Resume</div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="form-label" class="form-label"></label>
                        <input class="form-control dropify" name="document" type="file" data-default-file="@if(isset($employee)){{GetImg($employee->document,'employee_documents')??old('document')}}@endif">
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-label mb-0 mt-2">ID Proof</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="form-label" class="form-label"></label>--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-label mb-0 mt-2">Offer Letter</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="form-label" class="form-label">Attachment:</label>--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-label mb-0 mt-2">Joining Letter</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="form-label" class="form-label"></label>--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-label mb-0 mt-2">Agreement Letter</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="form-label" class="form-label">Attachment:</label>--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-label mb-0 mt-2">Experience Letter</div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="form-label" class="form-label">Attachment:</label>--}}
{{--                        <input class="form-control" type="file">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
