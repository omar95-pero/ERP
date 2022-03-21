<?php

namespace Modules\HR\Http\Controllers\Employees;

use Illuminate\Routing\Controller;
use Modules\HR\DTO\JobTitleDTO;
use Modules\HR\Actions\JobTitleAction;
use Modules\HR\Http\Requests\JobTitleRequest;
class JobTitleController extends Controller
{

    public $jobTitleAction;

    public function __construct(JobTitleAction $jobTitleAction)
    {
        $this->middleware(['auth', 'prevent-back-history']);
        $this->jobTitleAction = $jobTitleAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewModel = $this->jobTitleAction->get();
        return view('hr::job_titles.index', compact('viewModel'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(JobTitleRequest $request)
    {
        $data = new JobTitleDTO($request);
        $data = $data->dataFromRequest();
        $this->jobTitleAction->save($data);
        return redirect()->route('job-titles.index')->with('success','Data Created Successfully');

    }

    public function edit( $id)
    {
        $jobTitle = $this->jobTitleAction->find($id);
        //$view = view('hr::job_titlepartails.edit',compact('branch'))->render();
        if (request()->ajax()) {

            $view = view('hr::job_titles.partails.edit')
                ->with([
                    'jobTitle' => $jobTitle,
                ])
                ->render();
            return response()->json($view, 200);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(JobTitleRequest $request, $id)
    {
        $data = new JobTitleDTO($request);
        $data = $data->dataFromRequest();
        $this->jobTitleAction->update($id, $data);
        return back()->with('success','Data Updated Successfully');;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->jobTitleAction->delete($id);
        return back();
    }
}
